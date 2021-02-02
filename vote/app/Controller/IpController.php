<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
namespace App\Controller;

use Friday\Controller\Controller;
use App\Wish;
use App\Ip;
use donatj\UserAgent\UserAgentParser;
use ipinfo\ipinfo\IPinfo;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\DriverManager;

class IpController extends Controller
{
    /**
     * Create new Controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //ini_set('max_execution_time', 60);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function track()
    {
        
$connectionParams = array(
    'dbname' => env('DB_DATABASE'),
    'user' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    'host' => env('DB_HOST'),
    'driver' => 'pdo_sqlite',
);
$conn = DriverManager::getConnection($connectionParams);
        echo '<pre>';var_dump($conn);exit;

        $ua = (new UserAgentParser())->parse();
        $os = $ua->platform();
        $browser = $ua->browser();
        $version = $ua->browserVersion();

        $array = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'];
        foreach($array as $key) {
            $ip_array[$key]['getenv'] = getenv($key) ?? 'undefined';
            $ip_array[$key]['SERVER'] = $_SERVER[$key] ?? 'undefined';
        }

        //$ip = trim(GetHostByName($REMOTE_ADDR));
        //$refferer = GetHostByName($HTTP_REFERER);
        $http_x_forwarded_for_ip = $ip_array['HTTP_X_FORWARDED_FOR']['SERVER'];
        $ip = $ip_array['REMOTE_ADDR']['SERVER'];

        $time = time();
        $file = $_SERVER['PHP_SELF'];
        $page_uri = $_SERVER['REQUEST_URI'];
        $ip_info = json_encode($ip_array);
        $microtime_float = $this->get_microtime();
        $request_duration = $this->get_float_diff($microtime_float, $_SERVER["REQUEST_TIME_FLOAT"]);

        $session_start = date('Y-m-d H:i:s');
        $session_end = date('Y-m-d H:i:s', strtotime('+15 minute'));

        if(session('from_uri')) {
            $from_uri = $_SESSION['from_uri'];
        }
        else {
            $from_uri = "-";
        }

        $v_id = 0;
        $last_ip = Ip::where('ip','=',$ip)
            ->where('ref_id','=','0')
            ->orderBy('created_at', 'DESC')
            ->all();

        if(count($last_ip)) {
            $v_id = $last_ip[0]->id;
            $end_date = date($last_ip[0]->session_end, strtotime('+15 minute'));
        }

        if(count($last_ip) == 0 || $session_start > $end_date) {
            // running session
            $data = [
                'session_end' => $session_end,
            ];
            $query = Ip::where('id','=',$v_id)
                ->update($data);
        }

        $_SESSION['from_uri'] = $_SERVER['HTTP_REFERER'] ?? '';
        $session_id = session('session_id');

        $data = [
            'user_id' => 0,
            'ip' => $ip,
            'http_xff_ip' => $http_x_forwarded_for_ip,
            'ip_info' => $ip_info,
            'file' => $file,
            'page_uri' => $page_uri,
            'server_time' => date('Y-m-d H:i:s'),
            'microtime' => $microtime_float,
            'request_time' => date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']),
            'request_time_float' => $_SERVER['REQUEST_TIME_FLOAT'],
            'request_duration' => $request_duration,
            'from_uri' => $_SERVER['HTTP_REFERER'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'os' => $os,
            'browser' => $browser,
            'version' => $version,
            'method' => $_SERVER['REQUEST_METHOD'],
            'session_start' => $session_start,
            'session_end' => $session_end,
            'session_id' => $session_id,
            'ref_id' => $v_id,
            'login_attemp' => '',
            'login_success' => '',
            'logout' => '',
            'remember_me' => '',
            'sec_id' => '',
        ];
        $query = Ip::create($data);
    }

    // Function to get the client IP address
    public function get_client_ip() {
        $array = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'];
        $ipaddress = [];
        foreach($array as $key) {
            if (getenv($key)) {
                $ipaddress = ['ip'=>getenv($key), 'from'=>"getenv(".$key.")"];
                break;
            }
        }

        if(!empty($ipaddress)) {
            return $ipaddress;
        }

        //$_SERVER is an array that contains server variables created by the web server.
        // Function to get the client IP address
        foreach($array as $key) {
            if (isset($_SERVER[$key])) {
                $ipaddress = ['ip'=>$_SERVER[$key], 'from'=>'$'.'_SERVER['.$key.']'];
                break;
            }
        }

        if(!empty($ipaddress)) {
            return $ipaddress;
        }

        return ['ip'=>'-', 'from'=>'-'];
    }

    public function get_microtime() {
        $time = microtime();
        list($usec, $sec) = explode(" ", $time);
        return $sec . trim($usec, '0');
    }

    public function get_float_diff($f1, $f2) {
        $f1 = explode('.', $f1);
        $f2 = explode('.', $f2);
        $f1[1] = $f1[1] ?? '0';
        $f2[1] = $f2[1] ?? '0';
        $usec = $f1[1] - $f2[1];
        $sec = $f1[0] - $f2[0];
        if($usec < 0) {
            $usec = ('1'.$f1[1]) - $f2[1];
            $sec = $f1[0] - $f2[0] - 1;
        }
        return $sec.'.'.$usec;
    }

    /**
     * IP address API, allowing you to lookup your own IP address,
     * or get any of the following details for an IP:
     *
     * IP to Geolocation data (city, region, country, postal code, latitude and longitude)
     * ASN information (ISP or network operator, associated domain name, and type,
     * such as business, hosting or company)
     * Company details (the name and domain of the business that uses the IP address)
     * Carrier information (the name of the mobile carrier and MNC and MCC for that carrier
     * if the IP is used exclusively for mobile traffic)
     */
    public function get_ip_info($ip) {
        $auth = false;
        $access_token = $auth ? '42b3ec26319ab9' : null;
        $settings = ['cache_maxsize' => 30, 'cache_ttl' => 128];
        $client = new IPinfo($access_token, $settings);
        $ip_address = '216.239.36.21';
        $details = $client->getDetails();
echo '<pre>';var_dump($details->all);
        $details = $client->getDetails($ip);
var_dump($details->all);exit;

        return $details;
    }
}

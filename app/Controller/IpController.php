<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
namespace App\Controller;

use Friday\Controller\Controller;
use App\Wish;
use App\Ip;

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
        $ua = (new \donatj\UserAgent\UserAgentParser())->parse();
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
echo '<pre>';print_r([$os, $browser, $version]);exit;
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
}

<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
namespace App\Controller;

use Friday\Controller\Controller;
use Friday\Foundation\Application;
use App\Feedback;
use App\Controller\IpController;

class IndexController extends Controller
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
     * Index method.
     *
     * @return void
     */
    public function index()
    {
        //(new IpController)->track();
        $lang = 'en-us';
        $app_name = "Agwis";
        $app_url = "agwis.com";
        $brand_image = "logo.png";
        $og_image = null;
        $favicon = "favicon.ico";
        $author = "GaurangKumar";
        $made_by = "GK";
        $keyword_array = [''];
        $keywords = implode(',', $keyword_array);
        $description = 'Agwis - Comming Soon';//"GaurangKumar is full-stack web developer specializing in PHP.";
        $title = "Agwis - Comming Soon";//"GaurangKumar Parmar - Full-Stack Web Developer";

        $launch_date = "7 January 2021";
        $data = compact(
            'title',
            'app_url',
            'brand_image',
            'favicon',
            'keywords',
            'description',
            'author',
            'launch_date',
            'lang'
        );

//echo '<pre>';print_r($data);exit;
        //$this->theme('comming-soon', $data, 'index.php');
        $this->template('comming-soon.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/*Request $request*/)
    {
        // TODO
        $request = new \stdClass;
        foreach(array_merge($_POST,$_FILES) as $key => $val) {
            $request->$key = $val;
        }

        /*
		if (empty($request->name)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Track name can not be empty.</strong>']);

			redirect(route('track.create'));
        }

		if (empty($request->category)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Track category can not be empty.</strong>']);

			redirect(route('track.create'));
        }

		if (empty($request->amount)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Track amount can not be empty.</strong>']);

			redirect(route('track.create'));
        }

		if (empty($request->date)) {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Track date can not be empty.</strong>']);

			redirect(route('track.create'));
        }
        */

        $data = [
            'name'    => $request->name,
            'email'=> $request->email,
            'subject'=>'Comming Soon Page',
            'message'=> $request->msg,
            'ip'=> $this->get_client_ip()['ip'],
            'ip_from'=> $this->get_client_ip()['from'],
            'ref'   => $_SERVER['HTTP_REFERER'],
        ];

        $query = Feedback::create($data);

		if($query) {
			session('msg', ['type'=>'success', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Feedback '.$request->name.' saved successfully..</strong>']);

			redirect(route('home'));
		} else {
			session('msg', ['type'=>'danger', 'msg'=>'<i class="fa fa-warning-circle"></i><strong> Error: Feedback not saved!</strong>']);

			redirect(route('home'));
		}
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
}

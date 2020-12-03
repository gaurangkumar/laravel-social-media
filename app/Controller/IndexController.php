<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Controller;

use Friday\Controller\Controller;
use Friday\Foundation\Application;

class IndexController extends Controller
{
    /**
     * Create new Controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Index method.
     *
     * @return void
     */
    public function index()
    {
        //trigger_error('msg');
        //throw new \Exception('msg');
        $this->template('index', ['name'=>'IronPHP', 'version'=>Application::VERSION]);
        //Examples
        //$data = $this->model('IndexModel')->get('name');
        //$data = $this->model('IndexModel')->get(null, ['id' => 1]);
        //$data = $this->model('IndexModel')->get(null, ['id' => 1, 'status' => 0]);
        //$data = $this->model('IndexModel')->get(null, 'WHERE id = 2 AND status = 1');
        //$data = $this->model('IndexModel')->add();
        //$data = $this->model('IndexModel')->update();
        //$data = $this->model('IndexModel')->delete();
        //$this->view('index');
        //$this->view('index', $data);
    }

    /**
     * Parameter method.
     *
     * @return void
     */
    public function name($param)
    {
        return "Name($param) Method Called";
    }

    /**
     * Show users from model.
     *
     * @return void
     */
    public function showUsers()
    {
        //return $this->model->getUsers();
    }
}

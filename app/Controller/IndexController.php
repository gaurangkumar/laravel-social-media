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
        //ini_set('max_execution_time', 60);
    }

    /**
     * Index method.
     *
     * @return void
     */
    public function index()
    {
        $data = $this->model('IndexModel')->getIndex();
        $this->theme('educature', $data, 'index.html');
    }
}

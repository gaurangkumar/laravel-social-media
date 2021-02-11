<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function __construct() {
        \View::share ( 'currentRoute', Route::currentRouteName() );
    }

    public function index() {
        return view('index', ['title' => 'Agwis Messenger']);
    }

    public function group() {
        return view('group', ['title' => 'Groups | Agwis Messenger']);
    }
<<<<<<< HEAD
	 public function call() {
        return view('call', ['title' => 'Call | Agwis Messenger']);
    }
	 public function status() {
        return view('status', ['title' => 'Status | Agwis Messenger']);
=======

    public function call() {
        return view('call', ['title' => 'Calls | Agwis Messenger']);
>>>>>>> 4b36bf48d9a3a276f5195b3052e2214f6c5d27d4
    }
}

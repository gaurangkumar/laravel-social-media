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

    public function call() {
        return view('call', ['title' => 'Calls | Agwis Messenger']);
    }
}

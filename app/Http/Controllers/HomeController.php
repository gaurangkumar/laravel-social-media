<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index', ['title' => 'Agwis Messenger']);
    }

    public function group() {
        return view('group', ['title' => 'Groups | Agwis Messenger']);
    }
	 public function call() {
        return view('call', ['title' => 'Call | Agwis Messenger']);
    }
	 public function status() {
        return view('status', ['title' => 'Status | Agwis Messenger']);
    }
}

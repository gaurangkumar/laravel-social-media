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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Chat;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        \View::share ( 'currentRoute', Route::currentRouteName() );
    }

    public function index() {
        $title = 'Agwis Messenger';
        $user = auth()->user();
        $chats = Chat::where('rid','=',$user->id)->get();
        echo '<pre>';print_r($chats);exit;
        return view('index', compact('title', 'chats'));
    }

    public function page() {
        return view('page', ['title' => 'pages | Agwis Messenger']);
    }

	public function call() {
        return view('call', ['title' => 'Calls | Agwis Messenger']);
    }

	public function status() {
        return view('status', ['title' => 'Status | Agwis Messenger']);
	}
}

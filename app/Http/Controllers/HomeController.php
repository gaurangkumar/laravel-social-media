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
        ini_set('memory_limit', '1024M');
        $title = 'Agwis Messenger';
        $user = auth()->user();

        $senders = Chat::where('rid',$user->id)
            ->with('users')
            ->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
            ->distinct('user_id')
            ->get();
        
        $chats = [];
        foreach($senders as $sender) {
        //echo '<pre>';print_r($sender->users->id);exit;
            $chats[] = Chat::where('rid',$user->id)
                ->where('user_id',$sender->users->id)
                ->with('users')
                //->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
                ->first();
        }
        //$chats = Chat::where('rid','=',$user->id)->get();
        return view('index', compact('title', 'chats'));
    }

    public function page() {
        return view('page', ['title' => 'Pages | Agwis Messenger']);
    }

	public function call() {
        return view('call', ['title' => 'Calls | Agwis Messenger']);
    }

	public function status() {
        return view('status', ['title' => 'Status | Agwis Messenger']);
	}
}

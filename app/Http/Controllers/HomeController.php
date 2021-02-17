<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Chat;
use App\Models\User;

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
        
        $side_chats = [];
        foreach($senders as $sender) {
            $side_chats[] = Chat::where('rid',$user->id)
                ->where('user_id',$sender->users->id)
                ->with('users')
                //->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
                ->first();
        }

        $sender = null;
        //$chats = Chat::where('rid','=',$user->id)->get();
        return view('index', compact('title', 'side_chats', 'sender'));
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

	public function chat(Request $request) {
        $title = 'Chat | Agwis Messenger';
        $user = auth()->user();

        $senders = Chat::where('rid',$user->id)
            ->with('users')
            ->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
            ->distinct('user_id')
            ->get();
        
        $side_chats = [];
        foreach($senders as $sender) {
            $side_chats[] = Chat::where('rid',$user->id)
                ->where('user_id',$sender->users->id)
                ->with('users')
                //->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
                ->first();
        }

        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $chats = Chat::whereIn('rid', [$sender->id, $user->id])
            ->whereIn('user_id', [$sender->id, $user->id])
            ->get();
        //echo '<pre>';print_r($chats);exit;

        return view('index', compact('title', 'side_chats', 'chats', 'sender'));
	}

	public function sendchat(Request $request) {
        echo '<pre>';print_r($request->toArray());exit;
        $title = 'Chat | Agwis Messenger';
        $user = auth()->user();

        $senders = Chat::where('rid',$user->id)
            ->with('users')
            ->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
            ->distinct('user_id')
            ->get();
        
        $side_chats = [];
        foreach($senders as $sender) {
            $side_chats[] = Chat::where('rid',$user->id)
                ->where('user_id',$sender->users->id)
                ->with('users')
                //->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
                ->first();
        }

        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $chats = Chat::whereIn('rid', [$sender->id, $user->id])
            ->whereIn('user_id', [$sender->id, $user->id])
            ->get();

        return view('index', compact('title', 'side_chats', 'chats', 'sender'));
	}
}

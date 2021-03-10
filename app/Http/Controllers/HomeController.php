<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\PageFollower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        \View::share('currentRoute', Route::currentRouteName());
    }

    public function index()
    {
        ini_set('memory_limit', '1024M');
        $title = 'Agwis Messenger';
        $user = auth()->user();

        $side_chats = $this->get_last_chats($user->id);

        $friends = $this->get_friends($user->id);

        $pages = $this->get_pages($user->id);

        $sender = null;

        return view('index', compact('title', 'side_chats', 'pages', 'sender', 'user', 'friends'));
    }

    public function get_pages($uid)
    {
        $pages = PageFollower::where('user_id', $uid)
            ->with('users')
            ->with('pages')
            ->orderBy('created_at', 'DESC')
            ->get();

        //echo '<pre>';print_r($pages->toArray());exit;
        return $pages;
    }

    public function page(Request $request)
    {
        return view('page', array('title' => ' | Agwis Messenger'));
    }

    public function call()
    {
        return view('call', array('title' => 'Calls | Agwis Messenger'));
    }

    public function status()
    {
        return view('status', array('title' => 'Status | Agwis Messenger'));
    }

    public function chat(Request $request)
    {
        $title = 'Chat | Agwis Messenger';
        $user = auth()->user();

        $side_chats = $this->get_last_chats($user->id);

        $pages = $this->get_pages($user->id);

        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);
        if (empty($sender)) {
            echo '<pre>';
            print_r($sender_id);
            exit;
        }

        $chats = Chat::whereIn('rid', array($sender->id, $user->id))
            ->whereIn('user_id', array($sender->id, $user->id))
            ->get();

        $friends = $this->get_friends($user->id);

        return view('chat', compact('title', 'side_chats', 'pages', 'chats', 'sender', 'user', 'friends'));
    }

    public function sendchat(Request $request)
    {
        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $user = auth()->user();

        $request->validate(array(
            'msg' => 'required',
        ));

        $data = array(
            'user_id' => $user->id,
            'rid' => $sender->id,
            'msg' => $request->msg,
        );

        $data = Chat::create($data);

        return redirect()->route('chat', $sender->id);
    }

    public function page_create(Request $request)
    {
        echo '<pre>';
        var_dump($request->toArray());
        exit;
        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $user = auth()->user();

        $request->validate(array(
            'msg' => 'required',
        ));

        $data = array(
            'user_id' => $user->id,
            'rid' => $sender->id,
            'msg' => $request->msg,
        );

        $data = Chat::create($data);

        return redirect()->route('chat', $sender->id);
    }

    public function get_last_chats($uid)
    {
        $query = "id IN( SELECT MAX(id) FROM chats WHERE user_id = {$uid} GROUP BY rid ) OR id IN( SELECT MAX(id) FROM chats WHERE rid = ".$uid.' GROUP BY user_id )';

        //$results = DB::select( DB::raw($query) );
        $results = Chat::whereRaw($query)
            ->with('recievers')
            ->with('users')
            ->orderBy('created_at', 'DESC')
            ->get();

        $side_chats = array();
        $uids = array();
        foreach ($results as $result) {
            if ($result->user_id !== $result->rid) {
                if ($result->user_id === $uid) {
                    if (!in_array($result->rid, $uids)) {
                        array_push($side_chats, $result);
                        $uids[] = $result->rid;
                    }
                } else {
                    if (!in_array($result->user_id, $uids)) {
                        $side_chats[] = $result;
                        $uids[] = $result->user_id;
                    }
                }
            }
        }
        //echo '<pre>';foreach($side_chats as $i => $chat) print_r($uids[$i].' '.$chat->recievers->name.' => '.$chat->users->name."\n");exit;
        return $side_chats;
    }

    public function settings()
    {
        $title = 'Settings | Agwis Messenger';
        $user = auth()->user();

        $side_chats = $this->get_last_chats($user->id);

        $pages = $this->get_pages($user->id);

        $friends = $this->get_friends($user->id);

        $sender = null;

        return view('settings', compact('title', 'side_chats', 'pages', 'sender', 'user', 'friends'));
    }

    public function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime();
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k.' '.$v.($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string).' ago' : 'just now';
    }

    public function get_friends($uid)
    {
        $contacts = User::whereIn('id', function ($query) {
            $query->select('cid')
                ->from('contacts')
                ->where('user_id', auth()->user()->id);
        })
        ->orderBy('name', 'ASC')
        ->get();

        $friends = array();
        foreach ($contacts as $contact) {
            $friends[
                $contact->name[0]
            ][] = $contact;
        }

        return $friends;
    }

    public function profile(Request $request)
    {
        $user = auth()->user();

        $request->validate(array(
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits:10',
        ));

        if ($user->email !== $request->email) {
            $request->validate(array(
                'email' => 'required|string|email|max:255|unique:users',
            ));
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        );

        if (!empty($request->profile)) {
            $request->validate(array(
                'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ));

            $image = $request->profile->store('profile', array('disk' => 'public'));

            $data['profile'] = $image;
        }

        $result = $user->update($data);

        return redirect()->route('settings');
    }

    public function delete_profile(Request $request)
    {
        $user = auth()->user();

        $result = $user->update(array('profile' => null));
        //echo '<pre>';var_dump($result);exit;

        return redirect()->route('settings');
    }

    public function social(Request $request)
    {
    }
}

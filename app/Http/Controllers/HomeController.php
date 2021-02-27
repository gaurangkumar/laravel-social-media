<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Chat;
use App\Models\User;
use App\Models\Contact;

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

        $side_chats = $this->get_last_chats($user->id);

        $friends = $this->get_friends($user->id);

        $sender = null;

        return view('index', compact('title', 'side_chats', 'sender', 'user', 'friends'));
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

        $side_chats = $this->get_last_chats($user->id);

        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $chats = Chat::whereIn('rid', [$sender->id, $user->id])
            ->whereIn('user_id', [$sender->id, $user->id])
            ->get();

        $friends = $this->get_friends($user->id);

        return view('chat', compact('title', 'side_chats', 'chats', 'sender','user', 'friends'));
	}

	public function sendchat(Request $request) {
        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);
        $title = 'Chat | Agwis Messenger';
        $user = auth()->user();

		$request ->validate([
			'msg'=> 'required'
		]);
		$data = [
			'user_id' => $user->id,
			'rid' => $sender->id,
			'msg'=> $request->msg
		];
		$data = Chat::create($data);
        
		return redirect()->route('chat',$sender->id);
		
	}

    public function get_last_chats($uid) {
        $query = "id IN( SELECT MAX(id) FROM chats WHERE user_id = {$uid} GROUP BY rid ) OR id IN( SELECT MAX(id) FROM chats WHERE rid = ".$uid." GROUP BY user_id )";
        
        //$results = DB::select( DB::raw($query) );
        $results = Chat::whereRaw($query)
            ->with('recievers')
			->with('users')
			->orderBy('created_at', 'DESC')
            ->get();

        $side_chats = [];
        $uids = [];
        foreach($results as $result) {
            if($result->user_id != $result->rid) {
                if($result->user_id == $uid) {
                    if ( !in_array($result->rid, $uids) ) {
                        array_push($side_chats, $result);
                        $uids[] = $result->rid;
                    }
                }
                else {
                    if ( !in_array($result->user_id, $uids) ) {
                        $side_chats[] = $result;
                        $uids[] = $result->user_id;
                    }
                }
            }
        }
        //echo '<pre>';foreach($side_chats as $i => $chat) print_r($uids[$i].' '.$chat->recievers->name.' => '.$chat->users->name."\n");exit;
        return $side_chats;
    }

    public function settings() {
        return view('settings', ['title' => 'Settings | Agwis Messenger']);
    }

    public function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
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
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function get_friends($uid) {
        $contacts = User::whereIn('id', function($query) {
            $query->select('cid')
                ->from('contacts')
                ->where('user_id', auth()->user()->id);
        })
        ->orderBy('name', 'ASC')
        ->get();

        $friends = [];
        foreach($contacts as $contact) {
            $friends[
                $contact->name[0]
            ][] = $contact;
        }

        return $friends;
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

        /*
        select * from chats where id in (select max(id) from chats where user_id = 3 group by rid) ORDER by created_at desc
        
        SELECT * FROM chats WHERE id IN( SELECT MAX(id) FROM chats WHERE rid = 3 GROUP BY user_id ) ORDER BY created_at DESC
        
        SELECT * FROM chats WHERE
        id in (select max(id) from chats where user_id = 3 group by rid)
        OR
        id IN( SELECT MAX(id) FROM chats WHERE rid = 3 GROUP BY user_id )
        ORDER BY created_at DESC
        
        SELECT * FROM `chats` WHERE id in (SELECT DISTINCT id FROM `chats` WHERE `user_id` = 3 ORDER BY `created_at` DESC) or id in (SELECT DISTINCT id FROM `chats` WHERE `rid` = 3 ORDER BY `created_at` DESC)

        SELECT * FROM `chats` WHERE id in (SELECT id FROM chats where user_id=4 group by rid order by created_at)

        SELECT DISTINCT * FROM `chats` WHERE `user_id` = 3 ORDER BY `created_at` DESC
        SELECT DISTINCT * FROM `chats` WHERE `rid` = 3 ORDER BY `created_at` DESC
        // "select * from chats where id in (select max(id) from chats group by user_id)"
        
        // $query = "select chats.* from chats join (select max(created_at) maxtime,user_id from chats group by user_id) latest on chats.created_at=latest.maxtime and chats.user_id=latest.user_id";
        */
        
        //SELECT * FROM chats WHERE id IN( SELECT MAX(id) FROM chats WHERE user_id = 4 GROUP BY rid ) OR id IN( SELECT MAX(id) FROM chats WHERE rid = 4 GROUP BY user_id ) ORDER BY created_at DESC
        
        $query = "id IN( SELECT MAX(id) FROM chats WHERE user_id = {$user->id} GROUP BY rid ) OR id IN( SELECT MAX(id) FROM chats WHERE rid = ".$user->id." GROUP BY user_id )";
        
        //$results = DB::select( DB::raw($query) );
        $results = Chat::whereRaw($query)
            ->with('recievers')
			->with('users')
			->orderBy('created_at', 'DESC')
            ->get();

// echo '<pre>';print_r($results->toArray());exit;
        $side_chats = [];
        $uid = [];
        foreach($results as $result) {
            if($result->user_id == $user->id) {
                if ( !in_array($result->rid, $uid) ) {
                    array_push($side_chats, $result);
                    $uid[] = $result->rid;
                }
            }
            else {
                if ( !in_array($result->user_id, $uid) ) {
                    $side_chats[] = $result;
                    $uid[] = $result->user_id;
                }
            }
        }

        /*
        $recievers = Chat::where('user_id', $user->id)
            //->orWhere('',$user->id)
            //->with('recievers')
			->orderBy('created_at', 'DESC')
            ->select('rid')//'id','user_id', 'view', 'msg', 'created_at'
            ->distinct('rid')
            ->get();

		$senders = Chat::where('rid',$user->id)
            //->orWhere('user_id',$user->id)
            //->with('users')
            ->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
            ->distinct('user_id')
			->orderBy('created_at', 'DESC')
            ->get();
        
        $side_chats = [];
        foreach($senders as $sender) {
            $side_chats[] = Chat::where('rid',$user->id)
                ->where('user_id',$sender->users->id)
                ->with('users')
                //->select('user_id')//'id','user_id', 'view', 'msg', 'created_at'
                ->first();
        }
        */

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
		$data=Chat::create($data);
        
		return redirect()->route('chat',$sender->id);
		
	}
}

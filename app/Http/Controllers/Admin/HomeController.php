<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Business;
use App\Models\Group;
use App\Models\Page;
use App\Models\Chat;
use App\Models\Contact;
use App\Models\GroupMember;
use App\Models\PageComment;
use App\Models\PageFollower;
use App\Models\PageLike;
use App\Models\PagePost;
use App\Models\Product;
use App\Models\Call;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            header('Location: '.route('admin.login'));
            exit;
        }
        \View::share('currentRoute', Route::currentRouteName());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$title = 'Admin Home';
		$user_id = $_SESSION['admin'];
		$user = User::find($user_id);

		$count = new \StdClass;
		$today = date('Y-m-d', strtotime('+1 day'));

		$count->users_total = User::all()->count();
		$count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
			->get()
			->count();

		$count->users_total = User::all()->count();
		$count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
			->get()
			->count();

		return view('admin.index', compact('title', 'user', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
		$user = \App\Models\User::find($user_id);

		$count = array();
		$today = date('Y-m-d', strtotime('+1 day'));
<<<<<<< HEAD
		$count->users_total = User::all()->count();
		$count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
		    ->get();
		  
		//var_dump($count->users_last_week);
		$count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
			->get();
		/*var_dump($count->users_last_week);
		exit;*/
=======

		$ns = '\\App\\Models\\';
		$models = ['User','Admin','Business','Group','Page','Chat','Contact','GroupMember','PageComment','PageFollower','PageLike','PagePost','Product','Call','Status'];
		foreach($models as $i => $model) {
			$count[$i] = new \StdClass;
			$plural_snake = Str::snake(Str::plural($model));
			$count[$i]->name = $model;
			$count[$i]->icon = $model;
			$model = $ns.$model;
			if ($count[$i]->total = $model::all()->count()) {
				$count[$i]->last = $model::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
					->get()
					->count();
			}
		}
		var_dump($count);exit;
>>>>>>> d0733412059b22673e5ef01877434e287f91baf9

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

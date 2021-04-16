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
        //$this->middleware('auth:admin');

        session_start();
        $_SESSION['admin'] = 1;
        /*
                if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
                    header('Location: '.route('admin.login'));
                    exit;
                }
        */

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

        /*
        $count->users_total = User::all()->count();
        $count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
            ->get();

        //var_dump($count->users_last_week);
        $count->users_last_week = User::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
            ->get();
        */

        $ns = '\\App\\Models\\';
        $models = array(
            'User' => 'fa fa-user',
            'Admin' => 'fas fa-user-cog',
            'Business' => 'fas fa-building',
            'Group' => 'fa fa-users',
            'Page' => 'far fa-file-alt',
            'Chat' => 'far fa-comment-alt',
            'Contact' => 'far fa-address-card',
            'GroupMember' => 'fas fa-user-friends',
            'PageComment' => 'far fa-comment',
            'PageFollower' => 'far fa-thumbs-up',
            'PageLike' => 'far fa-heart',
            'PagePost' => 'fas fa-scroll',
            'Product' => 'fas fa-shopping-cart',
            'Call' => 'fas fa-phone-alt',
            'Status' => 'fas fa-photo-video',
        );

        $i = 0;
        foreach ($models as $model => $icon) {
            $count[$i] = new \StdClass();
            $plural_caps = ucwords(str_replace('_', ' ', Str::snake(Str::plural($model))));
            $count[$i]->name = $plural_caps;
            $count[$i]->icon = $icon;
            $model = $ns.$model;
            if ($count[$i]->total = $model::all()->count()) {
                $count[$i]->last = $model::whereRaw("created_at BETWEEN DATE_SUB('$today', INTERVAL 1 MONTH) AND '$today'")
                    ->get()
                    ->count();
            } else {
                $count[$i]->last = 0;
            }
            $i++;
        }
        /*

                        echo '<pre>';
                        print_r($count);
                        exit;

        */

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

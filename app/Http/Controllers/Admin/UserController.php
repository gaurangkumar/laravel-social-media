<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function __construct()
    {
        session_start();
        $_SESSION['admin'] = 1;
        /*
                        if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
                            header('Location: '.route('admin.login'));
                            //exit;
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
        return view('admin.user.index', array(
            'users' => User::all(),
            'title' => 'Users',
        ));
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
        $user = User::find($id);
        /* echo "<pre>"; var_dump($user->name);
          exit;
*/
        return view('admin.user.show', compact('user'));
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
        $user = User::find($id);

        return view('admin.user.edit', compact('user'));
        //echo "<pre>";var_dump($id);exit;
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
        $user = User::find($id);
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

        return view('admin.user.edit', compact('user'));
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

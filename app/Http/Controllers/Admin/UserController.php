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
        /*
                if (php_sapi_name() !== 'cli') {
                    if (version_compare(phpversion(), '5.4.0', '>=')) {
                        if (session_status() !== PHP_SESSION_ACTIVE) {
                            session_start();
                        } else {
                            if (session_id() === '') {
                                session_start();
                            }
                        }
                    }
                } else {
                    if (session_id() === '' || session_status() !== PHP_SESSION_ACTIVE) {
                        session_start();
                    }
                }
        */
        //session_start();
        // if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        //     header('Location: '.route('admin.login'));
        //     exit;
        // }

        \View::share('currentRoute', Route::currentRouteName());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::get(),
            'title' => 'Users',
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits:10',
        ]);

        if ($user->email !== $request->email) {
            $request->validate([
                'email' => 'required|string|email|max:255|unique:users',
            ]);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ];

        if (! empty($request->profile)) {
            $request->validate([
                'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ]);

            $image = $request->profile->store('profile', ['disk' => 'public']);

            $data['profile'] = $image;
        }

        $result = $user->update($data);

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->trashed();

        return redirect()->route('admin.user.index');
    }

    public function delete(User $user)
    {
        $d = User::where('id', $user->id)->update(['deleted_at' => '2021-04-01']);

        //$user->trashed();

        return redirect()->route('admin.user.index');
    }
}

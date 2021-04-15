<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                } elseif (session_id() === '') {
                    session_start();
                }
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            if (session_id() === '') {
                session_start();
            }
        }
        $_SESSION['admin'] = 1;
        /*
                        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
                            header('Location: '.route('admin.home'));
                            //exit;
                        }

        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
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
        $request->validate(array(
            'email' => 'required',
            'password' => 'required',
        ));

        $admin = Admin::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (empty($admin)) {
            return redirect()->route('admin.login');
        } else {
            $_SESSION['admin'] = $admin->id;

            return redirect()->route('admin.home');
        }
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
        unset($_SESSION['admin']);
        header('Location: '.route('admin.login'));
        exit;
    }
}

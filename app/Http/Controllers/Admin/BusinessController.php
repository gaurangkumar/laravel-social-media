<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BusinessController extends Controller
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
            session_start();
        }
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
        return view('admin.business.index', array(
            'businesses' => Business::all(),
            'title' => 'Business',
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
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Business $id)
    {
        $businesses = page::find($id);

        return view('admin.business.show', $business);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Business     $business
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
    }
}

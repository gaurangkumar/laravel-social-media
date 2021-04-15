<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
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
        return view('admin.page.index', array(
            'pages' => Page::all(),
            'title' => 'Page',
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
     * @param \App\Models\Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Page $id)
    {
        $page = page::find($id);

        return view('admin.page.show', $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page         $page
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageFollower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function __construct()
    {
        // session_start();
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
        return view('admin.page.index', [
            'pages' => Page::all(),
            'title' => 'Page',
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
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $title = 'Edit #'.ucwords($page->id).' Page | Agwis Admin';

        $followers = User::whereIn('id', function ($query) use ($page) {
            $query->select('user_id')
                ->from('page_followers')
                ->where('page_id', $page->id);
        })
        ->get();

        return view('admin.page.edit', compact('page', 'followers', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page_followers = array_column($page->followers->toArray(), 'user_id');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'uname' => 'required', //|unique:pages
            'description' => 'required|string|max:255',
            'followers' => 'required|array|min:1',
        ]);

        $data = [
            'name' => $request->name,
            'uname' => $request->uname,
            'description' => $request->description,
        ];

        if ($page->update($data) === false) {
            return back()->with('error', 'Error in updating Page!');
        }

        if (! in_array($page->user_id, $validated['followers'])) {
            //
        }

        foreach ($request->followers as $member) {
            $key = array_search($member, $page_followers);
            if ($key === false) {
                $obj = PageFollower::create([
                    'user_id' => $member,
                    'page_id' => $page->id,
                ]);
            }
        }

        foreach ($page_followers as $member) {
            $key = in_array($member, $request->followers);
            if ($key === false) {
                $result = PageFollower::where('user_id', $member)
                ->where('page_id', $page->id)
                ->delete();
            }
        }

        return redirect()->back()->with('status', 'Page updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $followers = PageFollower::where('page_id', $page->id)->delete();

        if ($followers !== false && $page->delete()) {
            return redirect()->route('admin.page.index')->with(['msg' => '']);
        } else {
            return back()->with('status', 'Error in deleting page!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function profile_delete(Page $page)
    {
        // $isExists = File::exists( public_path( $page->profile ) );
        $isExist = Storage::disk('public')->exists($page->profile);
        if ($isExist) {
            $isDeleted = Storage::disk('public')->delete($page->profile);
            if (! $isDeleted) {
                //
            }
        }
        $page->update(['profile' => null]);

        return redirect()->back()->with('status', 'Page profile picture is deleted!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function profile_update(Page $page, Request $request)
    {
        $isExist = Storage::disk('public')->exists($page->profile);
        if ($isExist) {
            $isDeleted = Storage::disk('public')->delete($page->profile);
            if (! $isDeleted) {
                //
            }
        }

        $request->validate([
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image = $request->profile->store('page', ['disk' => 'public']);

        $data['profile'] = $image;

        $result = $page->update($data);

        return redirect()->back()->with('status', 'Page profile picture is updated!');
    }
}

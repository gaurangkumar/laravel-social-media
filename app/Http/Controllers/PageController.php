<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageFollower;
use App\Models\PagePost;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ini_set('memory_limit', '1024M');
        $title = 'Agwis Messenger';
        $user = auth()->user();
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
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string',
            'uname' => 'required|unique:pages',
            'description' => 'required|string',
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image = $request->profile->store('page', ['disk' => 'public']);

        $data = [
            'name' => $request->name,
            'uname' => $request->uname,
            'description' => $request->description,
            'profile' => $image,
            'banner' => '',
            'user_id' => $user->id,
        ];

        $page = Page::create($data);

        $follow = PageFollower::create([
            'user_id' => $user->id,
            'page_id' => $page->id,
            'follow' => true,
        ]);

        return redirect()->route('page.show', $page->uname);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $followers_count = HomeController::number_abbr(
            PageFollower::where('page_id', $page->id)
            ->count()
        );

        $posts = PagePost::where('page_id', $page->id)
            ->orderby('created_at', 'ASC')
            ->get();

        $title = ucfirst($page->name).' | Agwis Messenger';
        $user = auth()->user();

        $home = new HomeController();
        $side_chats = $home->get_last_chats($user->id);

        $friends = $home->get_friends($user->id);

        $pages = $home->get_pages($user->id);

        return view('page', compact('title', 'side_chats', 'pages', 'user', 'friends', 'page', 'followers_count', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}

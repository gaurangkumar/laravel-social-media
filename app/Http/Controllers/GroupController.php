<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Group;
use App\Models\GroupMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        \View::share('currentRoute', Route::currentRouteName());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //echo '<pre>';print_r($request->toArray());exit;
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'members' => 'required|array|min:2',
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image = $request->profile->store('group', ['disk' => 'public']);

        $data = [
            'user_id' => $user->id,
            'name' => $request->name,
            'profile' => $image,
            'description' => $request->description,
        ];

        $group = Group::create($data);

        //$validated['members'][] = $user->id;
        array_push($validated['members'], $user->id);

        foreach ($validated['members'] as $member) {
            GroupMember::create([
                'user_id' => $member,
                'group_id' => $group->id,
            ]);
        }

        return redirect()->route('group.show', $group->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->orderBy('name', 'ASC')
        ->get();

        $group_members = [];
        foreach ($members as $member) {
            $group_members[
                $member->name[0]
            ][] = $member;
        }

        $members_count = $group->members->count();

        $chats = Chat::where('group_id', $group->id)
            ->orderby('created_at', 'ASC')
            ->get();

        $title = ucfirst($group->name).' | Agwis Messenger';
        $user = auth()->user();

        $edit_members = $this->edit_members($group->id);

        $home = new HomeController();
        $side_chats = $home->get_last_chats($user->id);

        $friends = $home->get_friends($user->id);

        $pages = $home->get_pages($user->id);

        return view('group', compact('title', 'side_chats', 'pages', 'user', 'friends', 'group', 'members_count', 'chats', 'group_members', 'edit_members'));
    }

    public function edit_members($group_id)
    {
        $gmembers = User::whereIn('id', function ($query) use ($group_id) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group_id);
        })
         ->orWhereIn('id', function ($query) {
             $query->select('cid')
                ->from('contacts')
                ->where('user_id', auth()->user()->id);
         })
        ->orderBy('name', 'ASC')
        ->get();

        $edit_members = [];
        foreach ($gmembers as $contact) {
            $edit_members[
                $contact->name[0]
            ][] = $contact;
        }

        return $edit_members;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}

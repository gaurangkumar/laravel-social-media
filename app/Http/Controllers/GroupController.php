<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        $user = auth()->user();

        $validated = $request->validate(array(
            'name' => 'required|string',
            'description' => 'required|string',
            'members' => 'required|array|min:2',
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ));

        $image = $request->profile->store('group', array('disk' => 'public'));

        $data = array(
            'user_id' => $user->id,
            'name' => $request->name,
            'profile' => $image,
            'description' => $request->description,
        );

        $group = Group::create($data);

        //$validated['members'][] = $user->id;
        array_push($validated['members'], $user->id);

        foreach($validated['members'] as $member) {
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
     * @param \App\Models\group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $members_count = HomeController::number_abbr(
            GroupMember::where('group_id', $group->id)
            ->count()
            );

        $chats = Chat::where('group_id',$group->id)
            ->orderby('created_at', 'ASC')
            ->get();

        $title = ucfirst($group->name).' | Agwis Messenger';
        $user = auth()->user();

        $home = new HomeController;
        $side_chats = $home->get_last_chats($user->id);

        $friends = $home->get_friends($user->id);

        $pages = $home->get_pages($user->id);

        return view('group', compact('title', 'side_chats', 'pages', 'user', 'friends', 'group', 'members_count', 'chats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\group        $group
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}

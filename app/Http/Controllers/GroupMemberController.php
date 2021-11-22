<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Route;

class GroupMemberController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\groupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function show(groupMember $groupMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\groupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function edit(groupMember $groupMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\groupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groupMember $groupMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\groupMember  $groupMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(groupMember $groupMember)
    {
        //
    }

    public function group_members(Group $group, Request $request)
    {
        $group_members = array_column($group->members->toArray(), 'user_id');
        $user = auth()->user();

        $request->validate([
            'members' => 'required|array|min:3',
        ]);

        foreach ($request->members as $member) {
            $key = array_search($member, $group_members);
            if ($key === false) {
                $obj = GroupMember::create([
                    'user_id' => $member,
                    'group_id' => $group->id,
                ]);
            }
        }

        foreach ($group_members as $member) {
            $key = in_array($member, $request->members);
            if ($key === false) {
                $result = GroupMember::where('user_id', $member)
                ->where('group_id', $group->id)
                ->delete();
            }
        }

        return redirect()->route('group.show', $group->id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GroupMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GroupMemberController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\groupMember $groupMember
     *
     * @return \Illuminate\Http\Response
     */
    public function show(groupMember $groupMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\groupMember $groupMember
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(groupMember $groupMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\groupMember  $groupMember
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groupMember $groupMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\groupMember $groupMember
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(groupMember $groupMember)
    {
        //
    }

    public function group_members(Request $request, $group_id)
    {
        var_dump($group_id);exit();
        $sender_id = Route::current()->parameter('user_id');
        $sender = User::find($sender_id);

        $user = auth()->user();

        $request->validate(array(
            'msg' => 'required',
        ));

        $data = array(
            'user_id' => $user->id,
            'rid' => $sender->id,
            'msg' => $request->msg,
        );

        $data = Chat::create($data);

        return redirect()->route('chat', $sender->id);
    }
}

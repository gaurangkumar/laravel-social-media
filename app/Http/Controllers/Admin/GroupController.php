<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
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
        $groups = Group::all();
        $title = 'All Groups | Agwis Admin';

        return view('admin.group.index', compact('groups', 'title'));
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
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $title = ucwords($group->name).' Group | Agwis Admin';

        $members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->get();

        return view('admin.group.show', compact('group', 'members', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $title = 'Edit #'.ucwords($group->id).' Group | Agwis Admin';

        $members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->get();

        return view('admin.group.edit', compact('group', 'members', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group_members = array_column($group->members->toArray(), 'user_id');

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'members' => 'required|array|min:3',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if ($group->update($data) === false) {
            return back()->with('error', 'Error in updating group!');
        }

        if (! in_array($group->user_id, $validated['members'])) {
            //
        }

        foreach ($request->members as $member) {
            $key = array_search($member, $group_members);
            if ($key === false) {
                $obj = GroupMember::create([
                    'user_id' => $member,
                    'group_id' => $group_id,
                ]);
            }
        }

        foreach ($group_members as $member) {
            $key = in_array($member, $request->members);
            if ($key === false) {
                $result = GroupMember::where('user_id', $member)
                ->where('group_id', $group_id)
                ->delete();
            }
        }

        return redirect()->back()->with('status', 'Group updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $members = GroupMember::where('group_id', $group->id)->delete();

        if ($members !== false && $group->delete()) {
            return redirect()->route('admin.group.index')->with(['msg' => '']);
        } else {
            return back()->with('status', 'Error in deleting group!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function profile_delete(Group $group)
    {
        // $isExists = File::exists( public_path( $group->profile ) );
        $isExist = Storage::disk('public')->exists($group->profile);
        if ($isExist) {
            $isDeleted = Storage::disk('public')->delete($group->profile);
            if (! $isDeleted) {
                //
            }
        }
        $group->update(['profile' => null]);

        return redirect()->back()->with('status', 'Group profile picture is deleted!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Group  $group
     * @return \Illuminate\Http\Response
     */
    public function profile_update(Group $group, Request $request)
    {
        $isExist = Storage::disk('public')->exists($group->profile);
        if ($isExist) {
            $isDeleted = Storage::disk('public')->delete($group->profile);
            if (! $isDeleted) {
                //
            }
        }

        $request->validate([
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image = $request->profile->store('group', ['disk' => 'public']);

        $data['profile'] = $image;

        $result = $group->update($data);

        return redirect()->back()->with('status', 'Group profile picture is updated!');
    }
}

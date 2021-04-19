<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GroupController extends Controller
{
    public function __construct()
    {
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                } else {
                    if (session_id() === '') {
                        session_start();
                    }
                }
            }
        } else {
            if (session_id() === '' || session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
        }
        $_SESSION['admin'] = 1;

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
        $title = 'Group';
        //echo '<pre>';print_r($groups[0]->users->toArray());exit;
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
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->get();
        //echo "<pre>";print_r($members);exit();

        return view('admin.group.show', compact('group', 'members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->get();
        //echo "<pre>";print_r($members);exit();

        return view('admin.group.edit', compact('group', 'members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
		$members = User::whereIn('id', function ($query) use ($group) {
            $query->select('user_id')
                ->from('group_members')
                ->where('group_id', $group->id);
        })
        ->get();

		echo '<pre>';print_r($request->toArray());exit;
		$request->validate(array(
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'members' => 'required|array|min:2',
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ));


        $data = array(
            'user_id' => $user->id,
            'name' => $request->name,
            'description' => $request->description,
        );

        if (!empty($request->profile)) {
            $request->validate(array(
                'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ));

            $image = $request->profile->store('profile', array('disk' => 'public'));

            $data['profile'] = $image;
        }
            $result = $group->update($data);
        array_push($validated['members'], $user->id);

        foreach ($validated['members'] as $member) {
            GroupMember::create(array(
                'user_id' => $member,
                'group_id' => $group->id,
            ));
        }

        return view('admin.group.update', compact('group','members'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
		$members = GroupMember::where('group_id', $group->id)->delete();

		if($members !== false && $group->delete()) {
			return redirect()->route('admin.group.index')->with(['msg'=>'']);
		}
		else {
			return back()->with('status', 'Error in deleting group!');
		}
    }
}

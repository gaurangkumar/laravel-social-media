<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $request->validate(array(
            'name' => 'required|string',
            'btype' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'profile' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ));

        $image = $request->profile->store('business', array('disk' => 'public'));

        $data = array(
            'name' => $request->name,
            'btype' => $request->btype,
            'address' => $request->address,
            'description' => $request->description,
            'profile' => $image,
            'user_id' => $user->id,
        );
        $business = Business::create($data);

//echo '<pre>';var_dump($business->toArray());exit;
        return redirect()->route('business.show', $business->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        $title = ucfirst($business->name).' | Agwis Messenger';
        $user = auth()->user();

        $home = new HomeController();
        $side_chats = $home->get_last_chats($user->id);

        $friends = $home->get_friends($user->id);

        $pages = $home->get_pages($user->id);

        $businesses = $home->get_businesses($business->id);

        return view('business', compact('title', 'side_chats', 'pages', 'user', 'friends', 'businesses', 'business' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\business     $business
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\business $business
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(business $business)
    {
        //
    }
}

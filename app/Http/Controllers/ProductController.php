<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ni_set('memory_limit', '1024M');
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
      var_dump($request); exit;
        $request->validate(array(
            'name' => 'required|string',
            'price' => 'required|float',
            'discount' => 'required|float',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ));

        $image = $request->profile->store('product', array('disk' => 'public'));

        $data = array(
            'name' => $request->name,
            'price' => $request->btype,
            'discount' => $request->address,
            'description' => $request->description,
            'img' => $image,
            'business_id' => $business->id,
        );
        $product = product::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\product      $product
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}

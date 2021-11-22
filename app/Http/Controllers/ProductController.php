<?php

namespace App\Http\Controllers;

use App\Models\Business;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        //$business= Business::find('id');

        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'numeric|nullable',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'business_id' => 'required',
        ]);

        $image = $request->img->store('product', ['disk' => 'public']);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'description' => $request->description,
            'img' => $image,
            'business_id' => $request->business_id,

        ];
        //echo "<pre>"; print_r($data);exit;

        $product = Product::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}

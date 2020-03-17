<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = product::all();
        dd($index);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $product = new product;
//        $product->title='jacketa';
//        $product->description = 'asd';
//        $product->save();
        product::create([
            'title' => 'asd',
            'description' => 'asdasd',
            'price' => 34,
            'discount' => '12',
            'id_type' => 1,
            'size' => 'L',
            'color' => 'red',
            'model' => 'asd',
            'calification' => 3,
            'quantity' => 45,
        ]);
        return 'datos';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $edit = product::findOrFail($id);
        $edit = product::where('id',$id)->firstOrFail();
        $edit->title = 'aaaaa';
        $edit->save();
        return 'ok';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

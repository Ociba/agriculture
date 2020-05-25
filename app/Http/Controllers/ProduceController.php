<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produce;

class ProduceController extends Controller
{
    //
    public function index()
    {
        $products = Produce::all();
        return response()->json($products);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Produce([
          'title' => $request->get('title'),
          'body' => $request->get('body')
        ]);
        $product->save();


        return response()->json('Product Added Successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Produce::find($id);
        return response()->json($product);
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
        $product = Produce::find($id);
        $product->title = $request->get('title');
        $product->body = $request->get('body');
        $product->save();


        return response()->json('Product Updated Successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Produce::find($id);
      $product->delete();


      return response()->json('Product Deleted Successfully.');
    }
}

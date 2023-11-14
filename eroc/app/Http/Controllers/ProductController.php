<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
//        dd($request->all());
        product::insert($request->all());
        return 'done';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        product::where('id',  session('updateID'))->update($request->all());
//        return redirect()->back()->with('ozv', 'Kluba ozv olduz ☻♥');
        return redirect()->route('myproducts');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data = product::get();
//        $data = User::where('id',  session('userID'))->get();
        return view('table', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $id = $request->id;
        $data = product::where('id',  $id)->get();
        session(['updateID' => $id, 'must_login' => 'yes']);
        return view('update', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}

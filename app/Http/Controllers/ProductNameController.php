<?php

namespace App\Http\Controllers;

use App\Models\ProductName;
use App\Http\Requests\StoreProductNameRequest;
use App\Http\Requests\UpdateProductNameRequest;

class ProductNameController extends Controller
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
     * @param  \App\Http\Requests\StoreProductNameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductNameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductName  $productName
     * @return \Illuminate\Http\Response
     */
    public function show(ProductName $productName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductName  $productName
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductName $productName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductNameRequest  $request
     * @param  \App\Models\ProductName  $productName
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductNameRequest $request, ProductName $productName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductName  $productName
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductName $productName)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PageMenuList;
use App\Http\Requests\StorePageMenuListRequest;
use App\Http\Requests\UpdatePageMenuListRequest;

class PageMenuListController extends Controller
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
     * @param  \App\Http\Requests\StorePageMenuListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageMenuListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageMenuList  $pageMenuList
     * @return \Illuminate\Http\Response
     */
    public function show(PageMenuList $pageMenuList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageMenuList  $pageMenuList
     * @return \Illuminate\Http\Response
     */
    public function edit(PageMenuList $pageMenuList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageMenuListRequest  $request
     * @param  \App\Models\PageMenuList  $pageMenuList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageMenuListRequest $request, PageMenuList $pageMenuList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageMenuList  $pageMenuList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageMenuList $pageMenuList)
    {
        //
    }
}

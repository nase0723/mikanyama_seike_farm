<?php

namespace App\Http\Controllers;

use App\Models\Haiku;
use App\Http\Requests\StoreHaikuRequest;
use App\Http\Requests\UpdateHaikuRequest;

class HaikuController extends Controller
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
     * @param  \App\Http\Requests\StoreHaikuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHaikuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Haiku  $haiku
     * @return \Illuminate\Http\Response
     */
    public function show(Haiku $haiku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Haiku  $haiku
     * @return \Illuminate\Http\Response
     */
    public function edit(Haiku $haiku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHaikuRequest  $request
     * @param  \App\Models\Haiku  $haiku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHaikuRequest $request, Haiku $haiku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Haiku  $haiku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Haiku $haiku)
    {
        //
    }
}

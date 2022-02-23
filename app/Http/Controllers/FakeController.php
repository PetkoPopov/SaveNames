<?php

namespace App\Http\Controllers;

use App\Models\Fake;
use App\Http\Requests\StoreFakeRequest;
use App\Http\Requests\UpdateFakeRequest;

class FakeController extends Controller
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
     * @param  \App\Http\Requests\StoreFakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFakeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fake  $fake
     * @return \Illuminate\Http\Response
     */
    public function show(Fake $fake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fake  $fake
     * @return \Illuminate\Http\Response
     */
    public function edit(Fake $fake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFakeRequest  $request
     * @param  \App\Models\Fake  $fake
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFakeRequest $request, Fake $fake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fake  $fake
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fake $fake)
    {
        //
    }
}

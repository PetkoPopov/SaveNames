<?php

namespace App\Http\Controllers;

use App\Models\TesTime;
use App\Http\Requests\StoreTesTimeRequest;
use App\Http\Requests\UpdateTesTimeRequest;

class TesTimeController extends Controller
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
     * @param  \App\Http\Requests\StoreTesTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTesTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TesTime  $tesTime
     * @return \Illuminate\Http\Response
     */
    public function show(TesTime $tesTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TesTime  $tesTime
     * @return \Illuminate\Http\Response
     */
    public function edit(TesTime $tesTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTesTimeRequest  $request
     * @param  \App\Models\TesTime  $tesTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTesTimeRequest $request, TesTime $tesTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TesTime  $tesTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(TesTime $tesTime)
    {
        //
    }
}

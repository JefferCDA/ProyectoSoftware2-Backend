<?php

namespace App\Http\Controllers;

use App\Models\facultys;
use Illuminate\Http\Request;

class FacultysController extends Controller
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
        $facultys = facultys::all();
        return $facultys;
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
        $facultys = facultys::create($request->all());
        return $facultys;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\facultys  $facultys
     * @return \Illuminate\Http\Response
     */
    public function show(facultys $facultys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\facultys  $facultys
     * @return \Illuminate\Http\Response
     */
    public function edit(facultys $facultys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\facultys  $facultys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facultys $facultys)
    {
        //
        $response = $facultys->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\facultys  $facultys
     * @return \Illuminate\Http\Response
     */
    public function destroy(facultys $facultys)
    {
        //
        $response = $facultys->findOrFail($id);
        return $response->destroy($id);
    }
}

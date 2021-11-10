<?php

namespace App\Http\Controllers;

use App\Models\programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = programs::all();
        return $programs;
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
        //
        $programs = programs::create($request->all());
        return $programs;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit(programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programs $programs)
    {
        //
        $response = $programs->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(programs $programs)
    {
        //
        $response = $programs->findOrFail($id);
        return $response->destroy($id);
    }
}

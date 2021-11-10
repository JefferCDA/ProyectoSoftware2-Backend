<?php

namespace App\Http\Controllers;

use App\Models\coursesinprograms;
use Illuminate\Http\Request;

class CoursesinprogramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coursesinprograms = coursesinprograms::all();
        return $coursesinprograms;
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
        $coursesinprograms = coursesinprograms::create($request->all());
        return $coursesinprograms;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coursesinprograms  $coursesinprograms
     * @return \Illuminate\Http\Response
     */
    public function show(coursesinprograms $coursesinprograms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coursesinprograms  $coursesinprograms
     * @return \Illuminate\Http\Response
     */
    public function edit(coursesinprograms $coursesinprograms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coursesinprograms  $coursesinprograms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coursesinprograms $coursesinprograms)
    {
        //
        $response = $coursesinprograms->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coursesinprograms  $coursesinprograms
     * @return \Illuminate\Http\Response
     */
    public function destroy(coursesinprograms $coursesinprograms)
    {
        //
        $response = $coursesinprograms->findOrFail($id);
        return $response->destroy($id);
    }
}

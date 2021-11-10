<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = courses::all();
        return $courses;
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
        $courses = courses::create($request->all());
        return $courses;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $courses)
    {
        //
        $response = $courses->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $courses)
    {
        //
        $response = $courses->findOrFail($id);
        return $response->destroy($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\classrooms;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classrooms = classrooms::all();
        return $classrooms;
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
        $classrooms = classrooms::create($request->all());
        return $classrooms;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function show(classrooms $classrooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function edit(classrooms $classrooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, classrooms $classrooms)
    {
        //
        $response = $classrooms->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(classrooms $classrooms)
    {
        //
        $response = $classrooms->findOrFail($id);
        return $response->destroy($id);
    }
}

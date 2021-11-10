<?php

namespace App\Http\Controllers;

use App\Models\typeclassroom;
use Illuminate\Http\Request;

class TypeclassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typeclassroom = typeclassroom::all();
        return $typeclassroom;
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
        $typeclassroom = typeclassroom::create($request->all());
        return $typeclassroom;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeclassroom  $typeclassroom
     * @return \Illuminate\Http\Response
     */
    public function show(typeclassroom $typeclassroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeclassroom  $typeclassroom
     * @return \Illuminate\Http\Response
     */
    public function edit(typeclassroom $typeclassroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeclassroom  $typeclassroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeclassroom $typeclassroom)
    {
        //
        $response = $typeclassroom->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeclassroom  $typeclassroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeclassroom $typeclassroom)
    {
        //
        $response = $typeclassroom->findOrFail($id);
        return $response->destroy($id);
    }
}

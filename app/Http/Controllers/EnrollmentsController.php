<?php

namespace App\Http\Controllers;

use App\Models\enrollments;
use Illuminate\Http\Request;

class EnrollmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enrollments = enrollments::all();
        return $enrollments;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $enrollments = enrollments::create($request->all());
        return $enrollments;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enrollments  $enrollments
     * @return \Illuminate\Http\Response
     */
    public function show(enrollments $enrollments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enrollments  $enrollments
     * @return \Illuminate\Http\Response
     */
    public function edit(enrollments $enrollments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enrollments  $enrollments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollments $enrollments)
    {
        //
        $response = $enrollments->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enrollments  $enrollments
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrollments $enrollments)
    {
        //
        $response = $enrollments->findOrFail($id);
        return $response->destroy($id);
    }
}

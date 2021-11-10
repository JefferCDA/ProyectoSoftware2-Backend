<?php

namespace App\Http\Controllers;

use App\Models\licenses;
use Illuminate\Http\Request;

class LicensesController extends Controller
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
        $licenses = licenses::all();
        return $licenses;
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
        $licenses = licenses::create($request->all());
        return $licenses;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\licenses  $licenses
     * @return \Illuminate\Http\Response
     */
    public function show(licenses $licenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\licenses  $licenses
     * @return \Illuminate\Http\Response
     */
    public function edit(licenses $licenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\licenses  $licenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, licenses $licenses)
    {
        //
        $response = $licenses->findOrFail($request->id);
        $response->update($request->all());
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\licenses  $licenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(licenses $licenses)
    {
        //
        $response = $licenses->findOrFail($id);
        return $response->destroy($id);
    }
}

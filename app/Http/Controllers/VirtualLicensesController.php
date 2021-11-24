<?php

namespace App\Http\Controllers;

use App\Models\VirtualLicenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VirtualLicensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $virtualLicenses = VirtualLicenses::all();
        return $virtualLicenses;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('virtual_licenses.create');
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
        $virtualLicenses = VirtualLicenses::create($request->all());

        return $virtualLicenses;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VirtualLicenses  $virtualLicenses
     * @return \Illuminate\Http\Response
     */
    public function show(VirtualLicenses $virtualLicenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VirtualLicenses  $virtualLicenses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VirtualLicenses  $virtualLicenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $virtual_license = VirtualLicenses::findOrFail($request->id);
        $virtual_license->name = $request->name;
        $virtual_license->lastName = $request->lastName;
        $virtual_license->document = $request->document;
        $virtual_license->program = $request->program;
        $virtual_license->photo = $request->photo;

        $virtual_license->save();

        return $virtual_license;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VirtualLicenses  $virtualLicenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $virtual_license = VirtualLicenses::destroy($request->id);
        return $virtual_license;
    }
}

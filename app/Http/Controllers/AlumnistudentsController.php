<?php

namespace App\Http\Controllers;

use App\Alumnistudents;
use Illuminate\Http\Request;

class AlumnistudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnistudents  $alumnistudents
     * @return \Illuminate\Http\Response
     */
    public function show(Alumnistudents $alumnistudents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnistudents  $alumnistudents
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnistudents $alumnistudents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnistudents  $alumnistudents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnistudents $alumnistudents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnistudents  $alumnistudents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnistudents $alumnistudents)
    {
        //
    }
}
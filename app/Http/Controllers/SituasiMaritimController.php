<?php

namespace App\Http\Controllers;

use App\Models\SituasiMaritim;
use Illuminate\Http\Request;

class SituasiMaritimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('situasi-maritim.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SituasiMaritim $situasiMaritim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SituasiMaritim $situasiMaritim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SituasiMaritim $situasiMaritim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SituasiMaritim $situasiMaritim)
    {
        //
    }
}

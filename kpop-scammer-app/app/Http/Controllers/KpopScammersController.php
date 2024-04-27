<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\KpopScammers;
use Illuminate\Http\Request;

class KpopScammersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('kpop_scammers.index');
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
    public function show(KpopScammers $kpopScammers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KpopScammers $kpopScammers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KpopScammers $kpopScammers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KpopScammers $kpopScammers)
    {
        //
    }
}

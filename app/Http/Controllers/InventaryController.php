<?php

namespace App\Http\Controllers;

use App\Models\Inventary;
use Illuminate\Http\Request;

class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Inventary');
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
    public function show(Inventary $inventary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventary $inventary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventary $inventary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventary $inventary)
    {
        //
    }
}

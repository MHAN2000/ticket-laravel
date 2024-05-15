<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('educationLevels.index');
    }

    public function getEducationLevels() {
        $educationLevels = EducationLevel::all();
        return response()->json($educationLevels);
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
    public function show(EducationLevel $educationLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EducationLevel $educationLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EducationLevel $educationLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EducationLevel $educationLevel)
    {
        //
    }
}

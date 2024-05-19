<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $educationLevels = EducationLevel::all();
            return DataTables::of($educationLevels)->make();
        }
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
        return view('educationLevels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $educationLevel = EducationLevel::create($request->all());
        return $educationLevel;
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

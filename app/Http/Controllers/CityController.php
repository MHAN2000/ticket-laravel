<?php
namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $cities = City::all();
            return DataTables::of($cities)->make();
        }
        return view('cities.index');
    }

    public function getCities() {
        $cities = City::all();
        return response()->json($cities);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return City::store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $city = City::find($id);
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $city)
    {
        $city = City::find($city);
        $city->update($request->all());
        return response()->json($city);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($city)
    {
        City::find($city)->delete();
        return response()->json('Ok');
    }
}

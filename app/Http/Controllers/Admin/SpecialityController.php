<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speciality;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::all();
        return view('dashboards.admin.speciality.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admin.speciality.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'speciality'=>'required',
        ]);

        $speciality = new Speciality();
        $speciality->name = $request->speciality;
        $speciality->save();

        return redirect()->route('admin.specialities.index')->with('success', 'Speciality Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $speciality = Speciality::findorFail($id);
        // return view('dashboards.admin.speciality.edit', compact('speciality'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $speciality = Speciality::findorFail($id);
        return view('dashboards.admin.speciality.edit',compact('speciality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'speciality'=>'required',
        ]);

        Speciality::findorFail($id)->update([
            'name'=>$request->speciality,
        ]);

        return redirect()->route('admin.specialities.index')->with('success', 'Speciality Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Speciality::findorFail($id)->delete();
        return redirect()->route('admin.specialities.index')->with('success', 'Speciality Deleted Successfully.');
    }
}

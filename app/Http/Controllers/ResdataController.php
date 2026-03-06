<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\resource;

class ResdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resource = Resource::all();
        return view('resource.index', compact('resource'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'dob'=>'required|date',
            'gov_id'=>'required'
        ]);
        Resource::create($data);
        return redirect()->route('resource.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
             $data = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'dob'=>'required|date',
            'gov_id'=>'required'
        ]);
        Resource::update($data);
          return redirect()->route('resource.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource  $resource)
    {
        $resource->delete();
        return back();
    }
}

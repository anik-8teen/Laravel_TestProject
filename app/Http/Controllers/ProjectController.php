<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\projects;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=projects::all();
        return $project;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project=projects::create();
        return $project;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $project=projects::find($id);
    return $project;
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
    public function update(Request $request, string $id)
    {
        $project=projects::get($id);
        $project.update($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

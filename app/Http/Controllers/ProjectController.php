<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.add-project');
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
    public function store(Request $request){
        $validatedData = $request->validate([
            'project_number' => 'required',
            'project_name' => 'required',
            'client' => 'required',
            'contact' => 'required',
            'short_circuit_level' => 'required',
            'dps_class' => 'required',
            'enclosure_type' => 'required',
            'has_energy_metering' => 'required|in:sim,nao',
            'has_grounding_switch' => 'required|in:sim,nao',
            'has_tension_testing' => 'required|in:sim,nao',
            'security_category' => 'required',
            'has_220V_command' => 'required|in:sim,nao',
        ]);
        $project = Project::create($validatedData);
        return redirect()->route('home');
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

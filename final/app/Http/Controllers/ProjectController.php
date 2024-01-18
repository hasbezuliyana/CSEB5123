<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Developer;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('projects.index', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'system_pic' => 'required|string|max:255',
            'system_owner' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'duration' =>'required|string|max:255',
            'methodology' => 'nullable|string|max:255',
            'platform' => 'required|string',
            'deployment_type' => 'required|string',
        ]);

        Project::create($validatedData);
        return redirect()->route('projects.index')->with('success', 'Project added successfully.');
    }

    public function show($id)
    {
        $project = Project::with('developers','reports')->findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $developers = Developer::take(8)->get();
        return view('projects.assign', compact('project', 'developers'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'developers' => 'required|array|max:4',
            'developers.*' => 'exists:developers,id',
        ]);

        $syncData = array_fill_keys($validatedData['developers'], ['status' => 'assigned']);
        $project->developers()->sync($syncData);

        return redirect()->route('projects.show', $project->id)->with('success', 'Developers assigned successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}


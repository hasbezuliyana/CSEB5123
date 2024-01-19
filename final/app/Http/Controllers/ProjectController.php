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
            'lead_developer' => 'required|exists:developers,id',
            'developers' => 'required|array|max:4',
            'developers.*' => 'exists:developers,id',
        ]);

        $project->developers()->detach();

        $project->developers()->attach($validatedData['lead_developer'], ['is_lead' => true]);

        $otherDevelopers = array_filter($validatedData['developers'], function ($developerId) use ($validatedData) {
            return $developerId != $validatedData['lead_developer'];
        });

        $syncData = array_fill_keys($otherDevelopers, ['is_lead' => false]);

        $project->developers()->attach($syncData);

        return redirect()->route('projects.show', $project->id)->with('success', 'Developers assigned successfully.');
    }
}


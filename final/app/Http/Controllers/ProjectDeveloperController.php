<?php

namespace App\Http\Controllers;

use App\Models\ProjectDeveloper;
use Illuminate\Http\Request;

class ProjectDeveloperController extends Controller
{
    public function index()
    {
        $projectDeveloper = ProjectDeveloper::all();
        return view('project_developers.index', compact('projectDeveloper'));
    }

    public function create()
    {
        return view('project_developers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'developer_id' => 'required|exists:developers,id',
            'datetime' => 'required|date',
            'status' => 'required',
            'is_lead' => 'required|boolean',

        ]);

        ProjectDeveloper::create($validatedData);
        return redirect()->route('project_developers.index')->with('success', 'Association created successfully.');
    }

    public function show(ProjectDeveloper $projectDeveloper)
    {
        return view('project_developers.show', compact('projectDeveloper'));
    }

    // Show the form for editing the specified association.
    public function edit(ProjectDeveloper $projectDeveloper)
    {
        return view('project_developers.edit', compact('projectDeveloper'));
    }

    public function update(Request $request, ProjectDeveloper $projectDeveloper)
    {
        $validatedData = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'developer_id' => 'required|exists:developers,id',
            'datetime' => 'required|date',
            'status' => 'required',
            'is_lead' => 'required|boolean',

        ]);

        $projectDeveloper->update($validatedData);
        return redirect()->route('project_developers.index')->with('success', 'Association updated successfully.');
    }

    // Remove the specified association from storage.
    public function destroy(ProjectDeveloper $projectDeveloper)
    {
        $projectDeveloper->delete();
        return redirect()->route('project_developers.index')->with('success', 'Association deleted successfully.');
    }
}

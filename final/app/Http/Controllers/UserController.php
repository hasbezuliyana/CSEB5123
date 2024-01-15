<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of reports.
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new report.
    public function create()
    {
        return view('users.create');
    }

    // Store a newly created report in storage.
    public function store(User $user)
    {
        $validatedData = $user->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'datetime' => 'required|date',
            'status' => 'required',
            'project_id' => 'required|exists:projects,id'
        ]);

        Report::create($validatedData);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Display the specified report.
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified report.
    public function edit(User $user)
    {
        return view('users.edit', compact('report'));
    }

    // Update the specified report in storage.
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'datetime' => 'required|date',
            'status' => 'required',
            'project_id' => 'required|exists:projects,id'
        ]);

        $user->update($validatedData);
        return redirect()->route('users.index')->with('success', 'Report updated successfully.');
    }

    // Remove the specified report from storage.
    public function destroy(User $user)
    {
        $report->delete();
        return redirect()->route('users.index')->with('success', 'Report deleted successfully.');
    }
}

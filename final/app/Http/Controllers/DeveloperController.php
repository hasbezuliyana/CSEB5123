<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        $developer = Developer::all();
        return view('developers.index', compact('developer'));
    }

    // Show the form for creating a new developer.
    public function create()
    {
        return view('developers.create');
    }

    // Store a newly created developer in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required'
        ]);

        Developer::create($validatedData);
        return redirect()->route('developers.index')->with('success', 'Developer created successfully.');
    }

    // Display the specified developer.
    public function show(Developer $developer)
    {
        return view('developers.show', compact('developer'));
    }

    // Show the form for editing the specified developer.
    public function edit(Developer $developer)
    {
        $developers = Developer::all(); // Fetch all developers
        return view('projects.assign', compact('project', 'developers'));return view('developers.edit', compact('developer'));
    }

    // Update the specified developer in storage.
    public function update(Request $request, Developer $developer)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required'
        ]);

        $developer->update($validatedData);
        return redirect()->route('developers.index')->with('success', 'Developer updated successfully.');
    }

    public function destroy(Developer $developer)
    {
        $developer->delete();
        return redirect()->route('developers.index')->with('success', 'Developer deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    // Display a listing of managers.
    public function index()
    {
        $manager = Manager::all();
        return view('managers.index', compact('manager'));
    }

    // Show the form for creating a new managers.
    public function create()
    {
        return view('managers.create');
    }

    // Store a newly created managers in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
        ]);

        // Use the validated data to create a new Manager
        Manager::create($validatedData);

        return redirect()->route('managers.index')->with('success', 'Manager created successfully.');
    }

    // Display the specified managers.
    public function show(Manager $managers)
    {
        return view('managers.show', compact('managers'));
    }

    // Show the form for editing the specified managers.
    public function edit(Manager $manager)
    {
        return view('managers.edit', compact('manager'));
    }

    // Update the specified managers in storage.
    public function update(Request $request, Manager $manager)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required'
        ]);

        $manager->update($validatedData);
        return redirect()->route('managers.index')->with('success', 'Manager updated successfully.');
    }

    // Remove the specified managers from storage.
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect()->route('managers.index')->with('success', 'Manager deleted successfully.');
    }
}

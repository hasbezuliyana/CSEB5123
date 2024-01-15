<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use Illuminate\Http\Request;

class BUController extends Controller
{
    public function index()
    {
        $bu = Bu::all();
        return view('bus.index', compact('bu'));
    }

    // Show the form for creating a new BU.
    public function create()
    {
        return view('bus.create');
    }

    // Store a newly created BU in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email'
        ]);

        Bu::create($validatedData);
        return redirect()->route('bus.index')->with('success', 'Business created successfully.');
    }

    // Display the specified BU.
    public function show(Bu $bu)
    {
        return view('bus.show', compact('bu'));
    }

    // Show the form for editing the specified BU.
    public function edit(Bu $bu)
    {
        return view('bus.edit', compact('bu'));
    }

    // Update the specified BU in storage.
    public function update(Request $request, Bu $bu)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email'
        ]);

        $bu->update($validatedData);
        return redirect()->route('bus.index')->with('success', 'Business Unit updated successfully.');
    }

    // Remove the specified BU from storage.
    public function destroy(Bu $bu)
    {
        $bu->delete();
        return redirect()->route('bus.index')->with('success', 'Business Unit deleted successfully.');
    }
}

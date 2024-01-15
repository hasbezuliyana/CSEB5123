<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Display a listing of reports.
    public function index()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    // Show the form for creating a new report.
    public function create()
    {
        return view('reports.create');
    }

    // Store a newly created report in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'datetime' => 'required|date',
            'status' => 'required',
            'project_id' => 'required|exists:projects,id'
        ]);

        Report::create($validatedData);
        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    // Display the specified report.
    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    // Show the form for editing the specified report.
    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    // Update the specified report in storage.
    public function update(Request $request, Report $report)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'datetime' => 'required|date',
            'status' => 'required',
            'project_id' => 'required|exists:projects,id'
        ]);

        $report->update($validatedData);
        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    // Remove the specified report from storage.
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}

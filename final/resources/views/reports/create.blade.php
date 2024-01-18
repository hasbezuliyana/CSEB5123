<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Report</title>
    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4">Create Report</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reports.store') }}" method="POST" class="bg-white p-4 shadow rounded">
            @csrf
            <input type="hidden" name="project_id" value="{{ $project->id }}">

            <fieldset>
                <div class="form-group mb-3">
                    <label for="project_name" class="form-label">Project Name:</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" value="{{ request('project_name') }}" readonly required>
                </div>
                <div class="form-group mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" id="status" name="status">
                        <option value="">--Select Status--</option>
                        <option value="ahead_of_schedule">Ahead of Schedule</option>
                        <option value="on_schedule">On Schedule</option>
                        <option value="delayed">Delayed</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="report_details" class="form-label">Report Details:</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group d-grid">
                    <button type="submit" class="btn btn-primary">Submit Report</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
</body>
</html>

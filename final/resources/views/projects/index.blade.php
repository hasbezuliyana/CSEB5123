{{-- resources/views/projects/index.blade.php --}}

@extends('layouts.layout')

@section('content2')
    <div class="container">
        <h1>Projects</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No.</th>
                <th>Project Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($project as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->project_name }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Assign</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this project?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

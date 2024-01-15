{{-- resources/views/project_developers/index.blade.php --}}

@extends('layouts.layout') {{-- Assuming you have a main layout file --}}

@section('content2')
    <div class="container">
        <h1>Project_Developer List</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Project ID</th>
                <th>Developer ID</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($projectDeveloper as $projectDeveloper)
                <tr>
                    <td>{{ $projectDeveloper->id }}</td>
                    <td>{{ $projectDeveloper->project_id }}</td>
                    <td>{{ $projectDeveloper->developer_id }}</td>
                    <td>
                        <a href="{{ route('project_developer.show', $project_developer->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('project_developer.edit', $project_developer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('project_developer.destroy', $project_developer->id) }}" method="POST" style="display: inline-block;">
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


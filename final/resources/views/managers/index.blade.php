{{-- resources/views/managers/index.blade.php --}}

@extends('layouts.layout') {{-- Assuming you have a main layout file --}}

@section('content2')
    <div class="container">
        <h1>Manager</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact No</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($manager as $manager)
                <tr>
                    <td>{{ $manager->id }}</td>
                    <td>{{ $manager->name }}</td>
                    <td>{{ $manager->contact_no }}</td>
                    <td>
                        <a href="{{ route('bus.show', $manager->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('bus.edit', $manager->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bus.destroy', $manager->id) }}" method="POST" style="display: inline-block;">
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


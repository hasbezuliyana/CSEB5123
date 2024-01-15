{{-- resources/views/bus/index.blade.php --}}

@extends('layouts.layout') {{-- Assuming you have a main layout file --}}

@section('content2')
    <div class="container">
        <h1>Business Units</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>PIC Name</th>
                <th>Contact No</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($bu as $bu)
                <tr>
                    <td>{{ $bu->id }}</td>
                    <td>{{ $bu->name }}</td>
                    <td>{{ $bu->system_pic }}</td>
                    <td>{{ $bu->contact_no }}</td>
                    <td>
                        <a href="{{ route('bus.show', $bu->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('bus.edit', $bu->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bus.destroy', $bu->id) }}" method="POST" style="display: inline-block;">
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

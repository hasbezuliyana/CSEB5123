{{-- resources/views/developers/index.blade.php --}}

@extends('layouts.layout') {{-- Assuming you have a main layout file --}}

@section('content2')
    <div class="container">
        <h1>Developers</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($developer as $developer)
                <tr>
                    <td>{{ $developer->id }}</td>
                    <td>{{ $developer->name }}</td>
                    <td>{{ $developer->contact_no }}</td>
                    <td>
                        <a href="{{ route('developer.show', $developer->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('developer.edit', $developer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('developer.destroy', $developer->id) }}" method="POST" style="display: inline-block;">
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


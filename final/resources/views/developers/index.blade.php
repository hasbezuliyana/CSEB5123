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
                <th>Email</th>
                <th>Notes</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($developer as $developer)
                <tr>
                    <td>{{ $developer->id }}</td>
                    <td>{{ $developer->name }}</td>
                    <td>{{ $developer->email }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


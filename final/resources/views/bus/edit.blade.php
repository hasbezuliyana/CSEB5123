{{-- resources/views/bus/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Edit Business Unit</h1>
    <form method="POST" action="{{ route('bus.update', $bu->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $bu->name }}" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $bu->address }}" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ $bu->phone_number }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $bu->email }}" required><br>

        <button type="submit">Update BU</button>
    </form>
@endsection

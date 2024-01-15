{{-- resources/views/developer/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Business Unit: {{ $developer->name }}</h1>
    <p>Address: {{ $developer->address }}</p>
    <p>Phone Number: {{ $developer->phone_number }}</p>
    <p>Email: {{ $developer->email }}</p>
    <a href="{{ route('developer.index') }}">Back to List</a>
@endsection

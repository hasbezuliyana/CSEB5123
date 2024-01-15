{{-- resources/views/bus/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Business Unit: {{ $bu->id }}</h1>
    <p>PIC Name: {{ $bu->system_owner }}</p>
    <p>Phone Number: {{ $bu->phone_number }}</p>
    <p>Email: {{ $bu->email }}</p>
    <a href="{{ route('bus.index') }}">Back to List</a>
@endsection

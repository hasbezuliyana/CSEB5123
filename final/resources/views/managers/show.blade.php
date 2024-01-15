{{-- resources/views/$managers/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Business Unit: {{ $manager->name }}</h1>
    <p>Address: {{ $manager->address }}</p>
    <p>Phone Number: {{ $manager->phone_number }}</p>
    <p>Email: {{ $manager->email }}</p>
    <a href="{{ route('managers.index') }}">Back to List</a>
@endsection

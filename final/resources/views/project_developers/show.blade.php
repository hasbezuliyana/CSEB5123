{{-- resources/views/projectdeveloper/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Project Developer: {{ $projectdeveloper->id }}</h1>
    <p>Project ID: {{ $projectdeveloper->project_id }}</p>
    <p>Developer ID: {{ $projectdeveloper->developer_id }}</p>
    <a href="{{ route('project developer.index') }}">Back to List</a>
@endsection

{{-- resources/views/project/show.blade.php --}}

@extends('layouts.layout')

@section('content2')
    <h1>Project: {{ $project->id }}</h1>
    <p>Project Name: {{ $project->project_name }}</p>
    <p>System PIC: {{ $project->system_pic }}</p>
    <p>System Owner: {{ $project->system_owner }}</p>
    <p>Start Date: {{ $project->start_date }}</p>
    <p>End Date: {{ $project->end_date }}</p>
    <p>Duration: {{ $project->duration }}</p>
    <p>Methodology: {{ $project->methodology }}</p>
    <p>Platform: {{ $project->platform }}</p>
    <p>Deployment Type: {{ $project->deployment_type }}</p>
    <a href="{{ route('projects.index') }}">Back to List</a>
@endsection

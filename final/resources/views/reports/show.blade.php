{{-- resources/views/$report/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Report: {{ $report->id }}</h1>
    <p>Title: {{ $report->title }}</p>
    <p>Description: {{ $report->description }}</p>
    <p>Datetime: {{ $report->datetime }}</p>
    <p>Status: {{ $report->status }}</p>
    <p>Project ID: {{ $report->project_id }}</p>
    <a href="{{ route('$report.index') }}">Back to List</a>
@endsection

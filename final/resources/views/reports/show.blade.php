{{-- resources/views/$report/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <p><strong>Project Name:</strong> {{ $report->project->project_name ?? 'N/A' }}</p>
            <p><strong>Status:</strong> {{ ucwords(str_replace('_', ' ', $report->status)) }}</p>
            <p><strong>Report Details:</strong> {{ $report->description }}</p>
        </div>
    <a href="{{ route('$reports.index') }}">Back to List</a>
    </div>
@endsection

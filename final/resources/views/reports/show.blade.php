@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Progress Reports</h1>

        @if($reports->isEmpty())
            <p>No reports available.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Report ID</th>
                    <th>Project Name</th>
                    <th>Status</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->project->project_name ?? 'N/A' }}</td>
                        <td>{{ ucwords(str_replace('_', ' ', $report->status)) }}</td>
                        <td>{{ $report->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection


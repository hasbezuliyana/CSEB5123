{{-- resources/views/project/show.blade.php --}}

@extends('layouts.layout')

@section('content2')
    <div class="container">
        <h1>Project Details: {{ $project->name }}</h1>
        <div>
            <p><strong>Project Name:</strong> {{ $project->project_name }}</p>
            <p>Project: {{ $project->id }}</p>
            <p>Project Name: {{ $project->project_name }}</p>
            <p>System PIC: {{ $project->system_pic }}</p>
            <p>System Owner: {{ $project->system_owner }}</p>
            <p>Start Date: {{ $project->start_date }}</p>
            <p>End Date: {{ $project->end_date }}</p>
            <p>Duration: {{ $project->duration }}</p>
            <p>Methodology: {{ $project->methodology }}</p>
            <p>Platform: {{ $project->platform }}</p>
            <p>Deployment Type: {{ $project->deployment_type }}</p>

            <h2>Assigned Developers</h2>
            @if ($project->developers->isEmpty())
                <p>No developers assigned to this project.</p>
            @else
                <ol>
                    @foreach ($project->developers as $developer)
                        <li>
                            @if ($developer->is_lead)
                                Lead: {{ $developer->name }} ({{ $developer->email }})
                            @else
                                Developer: {{ $developer->name }} ({{ $developer->email }})
                            @endif
                        </li>
                    @endforeach
                </ol>
            @endif


            <h2>Project Reports</h2>
            @if ($project->reports->isEmpty())
                <p>No reports available for this project.</p>
            @else
                <ol>
                    @foreach ($project->reports as $report)
                        <li>
                            {{ $report->status }} - {{ $report->description }}
                        </li>
                    @endforeach
                </ol>
            @endif

            <p><a href="{{ route('reports.create', ['projectId' => $project->id, 'project_name' => $project->project_name]) }}" >Create Report</a></p>
            <p><a href="{{ route('projects.index') }}" >Back to List</a></p>
@endsection

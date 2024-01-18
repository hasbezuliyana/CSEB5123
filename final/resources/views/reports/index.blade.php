@extends('layouts.layout')

@section('content2')
    <div class="container">
        <h1>Reports</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Project Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->project_name }}</td>
                    <td>
                        <a href="{{ route('reports.show', ['report' => $report->id]) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

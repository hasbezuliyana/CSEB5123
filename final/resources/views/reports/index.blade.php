{{-- resources/views/managers/index.blade.php --}}

@extends('layouts.layout')

@section('content2')
    <h1>Report List</h1>
    <ul>
        @foreach ($reports as $reports)
            <li>{{ $report->title }}</li>
        @endforeach
    </ul>
@endsection

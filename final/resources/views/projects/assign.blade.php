@extends('layouts.layout')

@section('content2')
    <div class="container">
        <h1>Assign Developers</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('projects.update', $project) }}" method="POST" id="assignForm">
            @csrf
            @method('PUT')
            @foreach ($developers as $developer)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="developers[]" value="{{ $developer->id }}" id="dev_{{ $developer->id }}">
                    <label class="form-check-label" for="dev_{{ $developer->id }}">
                        {{ $developer->name }} ({{ $developer->email }})
                    </label>
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary mt-3">Assign</button>
        </form>
    </div>

    <script>
        document.getElementById('assignForm').onsubmit = function() {
            var checkedBoxes = document.querySelectorAll('input[type="checkbox"]:checked').length;
            if (checkedBoxes > 4) {
                alert('You can only select up to 4 developers.');
                return false;
            }
            return true;
        };
    </script>
@endsection

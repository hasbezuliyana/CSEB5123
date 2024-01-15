<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Request Form</title>
    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet">
    <script>
        function calculateDuration() {
            var startDate = new Date(document.getElementById('start_date').value);
            var endDate = new Date(document.getElementById('end_date').value);
            var timeDiff = endDate.getTime() - startDate.getTime();
            var daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
            var weeksDiff = Math.ceil(daysDiff / 7);
            document.getElementById('duration').value = isNaN(weeksDiff) ? '' : weeksDiff + ' weeks';
        }
    </script>
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4">Project Request Form</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" class="bg-white p-4 shadow rounded">
        @csrf
        <div class="mb-3">
            <label for="project_name" class="form-label">Project Name:</label>
            <input type="text" class="form-control" id="project_name" name="project_name" required>
        </div>
        <div class="mb-3">
            <label for="system_pic" class="form-label">PIC:</label>
            <input type="text" class="form-control" id="system_pic" name="system_pic" required>
        </div>
        <div class="mb-3">
            <label for="system_owner" class="form-label">System Owner:</label>
            <input type="text" class="form-control" id="system_owner" name="system_owner" required>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" onchange="calculateDuration()" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" onchange="calculateDuration()" required>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" readonly>
        </div>
        <div class="mb-3">
            <label for="methodology" class="form-label">Methodology:</label>
            <input type="text" class="form-control" id="methodology" name="methodology">
        </div>
        <div class="mb-3">
            <label for="platform" class="form-label">Platform:</label>
            <select class="form-select" id="platform" name="platform">
                <option value="">--Select platform--</option>
                <option value="platform1">Web Based</option>
                <option value="platform2">Mobile</option>
                <option value="platform3">Stand Alone</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deployment_type" class="form-label">Deployment Type:</label>
            <select class="form-select" id="deployment_type" name="deployment_type">
                <option value="">--Select deployment type--</option>
                <option value="deployment-type1">Cloud</option>
                <option value="deployment-type2">On-Premises</option>
            </select>
        </div>
        <div class="d-grid">
            <button type="submit" class="submit-btn">Submit Request</button>
        </div>
    </form>
</div>
</body>
</html>

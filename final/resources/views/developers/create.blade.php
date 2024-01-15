{{-- resources/views/developers/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <!-- Main content -->
        <h1 class="mb-4">Add Developer</h1>
        <form method="POST" action="{{ route('developers.store') }}" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                    Please enter the developer's name.
                </div>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                <div class="invalid-feedback">
                    Please enter a valid phone number.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Developer</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        // JavaScript for form validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
@endpush

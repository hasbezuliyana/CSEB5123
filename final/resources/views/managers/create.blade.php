{{-- resources/views/managers/create.blade.php --}}

@extends('layouts.app')

@section('content')
        <!-- The previous div for the sidebar should be closed here -->
        <div class="col-md-9">
            <!-- Main content -->
            <h1 class="mb-4">Manager</h1>
            <form method="POST" action="{{ route('managers.store') }}" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Please enter the manager's name.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Manager</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })();
    </script>
@endpush

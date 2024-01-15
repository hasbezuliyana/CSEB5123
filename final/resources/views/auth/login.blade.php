<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNITEN ITMS</title>

    <!-- Fonts -->
    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet" />

    {{--<!-- Styles -->
    <style>
        body {
        }
        .navbar-brand, .nav-link, .my-form, .login-btn {
            color: black !important;
        }
        .my-form {
            background-color: rgba(210, 210, 255, 1.0);
            padding: 20px;
            border-radius: 10px;
        }
    </style>--}}
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">UNITEN ITMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="my-form">
        <h2 class="text-center">Hi, Welcome to UNITEN ITMS</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf <!-- This is essential for Laravel forms for CSRF protection -->
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@uniten.my" required>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <a href="{{ route('password.request') }}" class="text-dark">Forgot your password?</a>
            </div>
            <button type="submit" class="btn btn-primary login-btn">Login</button>
            <div class="mt-3">
                <a href="{{ route('register') }}" class="text-dark">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="{{ asset('css/minty-bootstrap.min.css') }}"></script>
</body>
</html>

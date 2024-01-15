<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNITEN ITMS</title>

    <!-- Fonts -->
    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Styles -->
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
    </style>
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



<!-- Bootstrap Bundle with Popper -->
<script src="{{ asset('css/minty-bootstrap.min.css') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNITEN ITMS</title>

    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar-brand, .nav-link, .my-form, .login-btn {
            color: black !important;
        }
        .my-form {
            background-color: rgba(210, 210, 255, 1.0);
            padding: 20px;
            border-radius: 10px;
        }
        .hero {
            background: url('path_to_your_hero_image.jpg') no-repeat center center;
            background-size: cover;
            height: 80vh;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            width: 60%;
            margin: auto;
        }
    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-primary" data-bs-themes="dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">UNITEN ITMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link active" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero">
    <div>
        <h1>Welcome to UNITEN ITMS</h1>
        <p>Your one-stop portal for all IT management solutions. Empowering UNITEN with innovative technology.</p>
    </div>
</div>

<div class="container mt-5">
    <h2>About ITMS</h2>
    <p>
        UNITEN ITMS (Information Technology Management Service) is dedicated to providing top-notch IT solutions and support to our students and staff. Explore our wide range of services and discover how we can enhance your UNITEN experience.
    </p>
    <!-- Add more content as needed -->
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="{{ asset('css/minty-bootstrap.min.css') }}"></script>
</body>
</html>

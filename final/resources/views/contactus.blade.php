<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .department {
            margin-bottom: 30px;
        }
        .department-header {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .contact-info {
            margin-left: 20px;
        }
    </style>
</head>
<body>
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
<div class="container mt-4">
    <h1>Contact Us</h1>
    <div class="row">
        <!-- ITMS Department Contact -->
        <div class="col-md-6 department">
            <div class="department-header">IT Management Service (ITMS)</div>
            <div class="contact-info">
                <p>Head of Department: Encik Razi bin Fuad</p>
                <p>Tel: +6012-3456789</p>
                <p>Fax: +603-4567890</p>
                <p>Email: razi@uniten.edu.my</p>
            </div>
        </div>
        <div class="department-header">IT Management Service (ITMS)</div>
        <div class="contact-info">
            <p>Head of Department: Encik Razi bin Fuad</p>
            <p>Tel: +6012-3456789</p>
            <p>Fax: +603-4567890</p>
            <p>Email: razi@uniten.edu.my</p>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us - UNITEN ITMS</title>

    <link href="{{ asset('css/minty-bootstrap.min.css') }}" rel="stylesheet" />

    <style>
        .hero {
            height: 300px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .team-member {
            margin: 15px;
        }
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
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
    <h1>About UNITEN ITMS</h1>
</div>

<div class="container mt-4">
    <h2>Who We Are</h2>
    <p>
        UNITEN ITMS (Information Technology Management Services) is an integral part of Universiti Tenaga Nasional, committed to providing cutting-edge IT services and support to our academic community. Our mission is to enable and empower students and faculty with reliable, efficient, and innovative technological solutions.
    </p>

    <h2>Our Services</h2>
    <ul>
        <li>Software Project Management</li>
        <li>Network and Infrastructure Management</li>
        <li>Software Development and Maintenance</li>
        <li>IT Security and Compliance</li>
        <li>Training and Consultation</li>
    </ul>

    <h2>Our Team</h2>
    <div class="row">
        <div class="col-md-4 team-member">
            <ul>
                <li>Encik Razi bin Fuad, Senior Manager</li>
                <li>Puan Lily bt Rahim, IT Project Manager</li>
                <li>Cik Huda bt Ramizi, System Administrator</li>
                <li>Encik Ahmad bin Ali, IT Support Specialist </li>
                <li>Puan Sofia bt Aziz, IT Security Officer</li>
            </ul>
        </div>
    </div>
</div>

<footer>
    <p>&copy; {{ date('Y') }} UNITEN ITMS. All Rights Reserved.</p>
</footer>

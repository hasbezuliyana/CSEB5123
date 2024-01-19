<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNITEN ITMS</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link href="https://bootswatch.com/5/minty/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">UNITEN ITMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ ('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="container py-4">
    <div class="row">
        <div class="col-3">
            <div class="card overflow-hidden">
                <div class="card-body bg-primary">
                    <ul class="nav flex-column gap-2">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        @can('isBusinessUnit')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('request-form') }}">
                                Request Form
                            </a>
                        </li>
                        @endcan
                        @can('isDeveloper')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('developers.index') }}">
                                Developers
                            </a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('projects.index') }}">
                                Projects
                            </a>
                        </li>
                        @can('isDeveloper')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('reports.index') }}">
                                Reports
                            </a>
                        </li>
                        @endcan
                        @can('isManager')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('reports.index') }}">
                                    Reports
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content2')
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>

</html>



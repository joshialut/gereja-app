<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard GKII Gracia</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Dashboard Pengolah Jemaat GKII Gracia
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    </header>

    <div id="app" class="container-fluid">
        <div class="row">
            {{-- sidebar --}}
            @yield('sidebar')
            <aside class="col-12 col-md-auto p-2
            flex-shrink-1 bg-secondary">
                <nav id="sticky-sidebar"
                    class="navbar navbar-expand navbar-light flex-md-column flex-row align-items-start py-2">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 vh-100">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <li>
                                <a href="/dashboard" class="nav-link px-0 align-middle h1">
                                    <i class="fs-4 bi bi-house"></i>
                                    <span class="ms-2">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/jadwal" class="nav-link px-0 align-middle h1">
                                    <i class="fs-4 bi-calendar3"></i>
                                    <span class="ms-2 d-sm-inline">Jadwal</span>
                                </a>
                            </li>
                            <li>
                                <a href="/jemaat" class="nav-link px-0 align-middle h1">
                                    <i class="fs-4 bi-people"></i>
                                    <span class="ms-2 d-sm-inline">Jemaat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/persembahan" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-wallet"></i>
                                    <span class="ms-2 d-sm-inline">Persembahan</span>
                                </a>
                            </li>
                            <li>
                                <a href="/khotbah" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i>
                                    <span class="ms-2 d-sm-inline">Ringkasan Khotbah</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pengurus" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-person-vcard-fill"></i>
                                    <span class="ms-2 d-sm-inline">Pengurus</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="col bg-faded py-3 flex-grow-1">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            color: black
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar" style="background-color: #C0C0C0">
            <div class="container">
                <div class="d-flex">
                    <h3><b>TrueStore</b></h3>
                </div>
                <div class="d-flex">
                    <img src="/img/icon.png" alt="//" width="90" height="90">
                </div>
                <div class="d-flex">
                    <div class="row">
                        {{-- <div class="col-sm-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                            </svg>
                        </div> --}}
                        <div class="col-sm-5" >
                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <div class="d-flex flex-row justify-content-lg-center-">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" class="text-black" >
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a>
                                </li>&nbsp;
                            @endif


                            @if (Route::has('register'))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                </div>
            </div>

        </nav>

    </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-light text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #3b5998;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #55acee;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #dd4b39;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #ac2bac;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #0082ca;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <!-- Github -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #333333;"
                  href="#!"
                  role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">TrueStore.com</a>
            </div>
            <!-- Copyright -->
          </footer>

</body>
</html>

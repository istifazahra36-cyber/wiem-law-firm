<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wiem Law')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top w-100 ">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img id="navLogo" src="{{ asset('images/white-logo.png') }}" alt="Wiem Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link" id="navLogo">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link" id="navLogo">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navLogo" href="#" role="button" data-bs-toggle="dropdown">
                            Service
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/service/corporate">
                                    Corporate & Commercial
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/service/dispute">
                                    Dispute Resolution
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/article" class="nav-link" id="navLogo">Article</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link" id="navLogo">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link" id="navLogo">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2026 Wiem Law Firm. All rights reserved
    </footer>
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

<script>
    window.addEventListener("scroll", function() {
        let navbar = document.getElementById("navbar");
        let logo = document.getElementById("navLogo");
        let navLinks = document.querySelectorAll(".nav-link");

        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow", "navbar-light");
            navbar.classList.remove("navbar-dark");

            // ubah warna text jadi hitam
            navLinks.forEach(link => {
                link.classList.remove("text-white");
                link.classList.add("text-dark");
            });

            // ganti logo ke hitam
            logo.src = "{{ asset('images/black-logo.png') }}";

        } else {
            navbar.classList.remove("bg-white", "shadow", "navbar-light");
            navbar.classList.add("navbar-dark");

            // balikin text jadi putih
            navLinks.forEach(link => {
                link.classList.remove("text-dark");
                link.classList.add("text-white");
            });

            // balikin logo ke putih
            logo.src = "{{ asset('images/white-logo.png') }}";
        }
    });
</script>

</html>

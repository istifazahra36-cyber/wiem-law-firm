<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - Wiem Law</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    <div class="d-flex min-vh-100">
        <aside class="bg-dark text-white p-3" style="width: 260px;">
            <h1 class="h5 mb-4">Wiem Admin</h1>
            <nav class="nav flex-column gap-1">
                <a class="nav-link text-white" href="/admin">Dashboard</a>
                <a class="nav-link text-white" href="/admin/articles">Articles</a>
                <a class="nav-link text-white" href="/admin/corporate-services">Corporate Services</a>
                <a class="nav-link text-white" href="/admin/dispute-services">Dispute Services</a>
                <a class="nav-link text-white" href="/admin/pages">Pages & Contact</a>
                <a class="nav-link text-white" href="/admin/reports/articles/pdf">Report PDF</a>
                <a class="nav-link text-white" href="/">Lihat Website</a>
            </nav>
            <form action="/logout" method="POST" class="mt-4">
                @csrf
                <button class="btn btn-outline-light w-100" type="submit">Logout</button>
            </form>
        </aside>

        <main class="flex-grow-1 p-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

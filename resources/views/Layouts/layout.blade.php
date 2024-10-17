<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-light text-center py-3 mt-5">
        @include('partials.footer')
    </footer>
</body>
</html>

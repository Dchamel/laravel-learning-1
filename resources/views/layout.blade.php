<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">

        <div class="d-flex flex-column flex-md-row align-items-center pt-2 pb-2 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">Dchamel</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('homePage') }}">Main</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('aboutPage') }}">About</a>
            </nav>

            <a class='btn btn-info' href="{{ route('reviewPage') }}">Review</a>
        </div>

        @yield('main_content')

    </div>
</body>
</html>

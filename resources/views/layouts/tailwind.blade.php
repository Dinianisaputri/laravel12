<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    @include('partials.navbar-tailwind')

    <main>
        @yield('content')
    </main>

    @include('partials.footer-tailwind')

</body>
</html>
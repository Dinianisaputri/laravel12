
<!DOCTYPE html>
<html>
<head>
   <title>@yield('title')</title>
   
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@yield('styles') {{-- 👈 penting --}}
</head>
<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

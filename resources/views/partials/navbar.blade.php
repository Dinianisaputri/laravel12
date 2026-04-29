<nav class="navbar">
    <div class="logo">FixLa</div>
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ url('/fitur') }}" class="{{ request()->is('fitur') ? 'active' : '' }}">Fitur</a></li>
        <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        @auth
            <li><a href="{{ url('/admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">Dashboard</a></li>
        @else
            <li><a href="{{ url('/admin/login') }}" class="{{ request()->is('admin/login') ? 'active' : '' }}">Login</a></li>
        @endauth
    </ul>
</nav>


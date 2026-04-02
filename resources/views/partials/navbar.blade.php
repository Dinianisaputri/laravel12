<nav class="navbar">
    <div class="logo">FixLa</div>
    <ul>
        <li><a href="/" class="{{ Route::currentRouteName() == '' ? 'active' : '' }}">Home</a></li>
        <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="/fitur" class="{{ request()->is('fitur') ? 'active' : '' }}">Fitur</a></li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>

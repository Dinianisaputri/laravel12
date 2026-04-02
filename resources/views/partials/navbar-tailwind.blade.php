<nav class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white shadow">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="font-bold text-lg">FixLa</h1>

        <div class="flex gap-4 text-sm">
            <a href="/" class="hover:underline {{ request()->is('/') ? 'underline' : '' }}">Home</a>
            <a href="/about" class="hover:underline {{ request()->is('about') ? 'underline' : '' }}">About</a>
            <a href="/fitur" class="hover:underline {{ request()->is('fitur') ? 'underline' : '' }}">Fitur</a>
            <a href="/contact" class="hover:underline {{ request()->is('contact') ? 'underline' : '' }}">Contact</a>
        </div>

    </div>
</nav>
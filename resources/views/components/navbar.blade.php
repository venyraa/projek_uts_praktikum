<nav class="text-black p-6 mb-8 flex justify-between items-center" style="background-image: url('{{ asset('aset/bg_2.jpg') }}'); background-size: cover; background-position: center;">
    <div class="space-x-6 flex items-center">
        <a href="@if(!request()->has('username')) {{ route('home') }} @else {{ route('dashboard', ['username' => request()->query('username')]) }} @endif" class="flex items-center space-x-2">
            <img src="{{ asset('aset/logo.png') }}" alt="Logo" class="w-12 h-12 hover:opacity-80 transition-opacity">
        </a>
        @if(!request()->has('username'))
            <a href="{{ route('home') }}" class="text-lg hover:text-red-400 transition-colors">Home</a>
            <a href="{{ route('about') }}" class="text-lg hover:text-red-400 transition-colors">About</a>
            <a href="{{ route('login') }}" class="text-lg hover:text-red-400 transition-colors">Login</a>
        @else
            <a href="{{ route('about', ['username' => request()->query('username')]) }}" class="text-lg hover:text-yellow-400 transition-colors">About</a>
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="text-lg hover:text-yellow-400 transition-colors">Dashboard</a>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="text-lg hover:text-yellow-400 transition-colors">Profile</a>

            @if(request()->query('username') == 'admin')
                <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="text-lg hover:text-yellow-400 transition-colors">Pengelolaan</a>
        @endif
        @endif
    </div>

    <div class="lg:hidden">
        <button class="text-white">
            <i class="fas fa-bars"></i> 
        </button>
    </div>
</nav>

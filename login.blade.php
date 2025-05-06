@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-bold mb-4 text-center">Halaman Login</h1>

        @if(session('error'))
            <div class="bg-red-500 text-white p-2 mb-4 rounded text-center">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Username:</label>
                <input type="text" name="username" required class="border p-2 rounded w-full">
            </div>
            <div>
                <label class="block mb-1">Password:</label>
                <input type="password" name="password" required class="border p-2 rounded w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600">Login</button>
        </form>
    </div>
</div>
@endsection

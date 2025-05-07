@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center mb-6">Profil Saya</h2>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-700">Username:</label>
                <div class="border rounded px-3 py-2 bg-gray-50">{{ $username }}</div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition duration-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
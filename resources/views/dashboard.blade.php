@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-4xl font-bold text-center text-black mb-8 drop-shadow-lg">Selamat Datang {{ $username }}!</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($produk as $item)
            <div class="border border-gray-300 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 bg-white">
                <img src="{{ asset('aset/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-full h-64 object-cover">

                <div class="p-4">
                    <h2 class="text-2xl font-semibold mb-2 text-gray-800">{{ $item['nama'] }}</h2>
                    <p class="text-lg text-gray-600 mb-4">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <button class="bg-pink-500 hover:bg-pink-600 text-white w-full py-3 rounded-lg text-lg transition duration-300">Beli</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection

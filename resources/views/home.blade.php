@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container mx-auto p-6" >
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($produk as $item)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                <img src="{{ asset('aset/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $item['nama'] }}</h2>
                    <p class="text-gray-600 mb-3">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <p class="text-gray-600 text-sm mb-2">{{ $item['deskripsi'] }}</p>
                    <button class="bg-pink-500 hover:bg-pink-600 text-white w-full py-2 rounded">Beli</button>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
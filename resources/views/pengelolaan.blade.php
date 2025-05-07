@extends('layouts.app')

@section('title', 'Pengelolaan Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Kelola Produk</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('produk.tambah') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Produk</a>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($data as $produk)
            <div class="bg-white border border-gray-300 rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('aset/' . $produk['gambar']) }}" alt="{{ $produk['nama'] }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $produk['nama'] }}</h2>
                    <p class="text-gray-600 mb-2">Harga: Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
                    <div class="text-gray-500 text-sm mb-2">
                        {{ Str::limit($produk['deskripsi'], 80) }}
                    </div>
                    <div class="mt-4 flex space-x-3">
                        <a href="{{ route('produk.edit', $produk['id']) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <a href="{{ route('produk.hapus', $produk['id']) }}" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

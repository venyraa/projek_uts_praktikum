@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Detail Produk</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <p><strong>Nama Produk:</strong> {{ $produk['nama'] }}</p>
    <p><strong>Harga:</strong> {{ $produk['harga'] }}</p>
    <p><strong>Stok:</strong> {{ $produk['stok'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $produk['deskripsi'] }}</p>
    <p><strong>Gambar:</strong> {{ $produk['gambar'] }}</p>

    <a href="{{ route('produk.edit', $produk['id']) }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Edit Lagi</a>
@endsection

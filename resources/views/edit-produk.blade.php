@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="{{ route('produk.update', $produk['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block">Nama Produk:</label>
            <input type="text" name="nama" class="border w-full p-2 rounded" value="{{ $produk['nama'] }}" required>
        </div>

        <div class="mb-4">
            <label class="block">Harga:</label>
            <input type="text" name="harga" class="border w-full p-2 rounded" value="{{ $produk['harga'] }}" required>
        </div>

        <div class="mb-4">
            <label class="block">Stok:</label>
            <input type="number" name="stok" class="border w-full p-2 rounded" value="{{ $produk['stok'] }}" required>
        </div>

        <div class="mb-4">
            <label class="block">Deskripsi:</label>
            <textarea name="deskripsi" class="border w-full p-2 rounded" rows="4" required>{{ $produk['deskripsi'] }}</textarea>
        </div>


        <div class="mb-4">
            <label class="block">Gambar Produk:</label>
            <input type="file" name="gambar" class="border w-full p-2 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Produk</button>
    </form>
@endsection

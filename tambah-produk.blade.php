@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Produk Baru</h1>

    <form action="{{ route('produk.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block">Nama Produk:</label>
            <input type="text" name="nama" class="border w-full p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block">Harga:</label>
            <input type="text" name="harga" class="border w-full p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block">Stok:</label>
            <input type="number" name="stok" class="border w-full p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block">Deskripsi:</label>
            <textarea name="deskripsi" class="border w-full p-2 rounded" rows="4" required>{{ $produk['deskripsi'] }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block">Gambar Produk:</label>
            <input type="file" name="gambar" class="border w-full p-2 rounded" required>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan Produk</button>
    </form>
@endsection

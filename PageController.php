<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $produk = [
        [
            'id' => 1,
            'nama' => 'Bear Jojon Hitam Putih',
            'deskripsi' => 'Berstandart SNI, Boneka produksi sendiri, bahan terbaik, jahitan rapi dan kuat, ukuran 1 meter. BAHAN: 💯 Kain Rasfur, 💯 Isi Full Dakron Great A.',
            'stok' => 50,
            'harga' => 150000,
            'gambar' => 'jojon_hp.jpg'
        ],
        [
            'id' => 2,
            'nama' => 'Bear Jojon Pink Cream',
            'deskripsi' => 'Berstandart SNI, Boneka produksi sendiri, bahan terbaik, jahitan rapi dan kuat, ukuran 1 meter. BAHAN: 💯 Kain Rasfur, 💯 Isi Full Dakron Great A.',
            'stok' => 50,
            'harga' => 150000,
            'gambar' => 'jojon_pc.jpg'
        ],
        [
            'id' => 3,
            'nama' => 'Bear Pita',
            'deskripsi' => 'Berstandart SNI, Boneka produksi sendiri, bahan terbaik, jahitan rapi dan kuat, ukuran 1 meter. BAHAN: 💯 Kain Rasfur, 💯 Isi Full Dakron Great A.',
            'stok' => 50,
            'harga' => 135000,
            'gambar' => 'bear_pita.jpg'
        ],
        [
            'id' => 4,
            'nama' => 'Bear Jumbo',
            'deskripsi' => 'Berstandart SNI, Boneka produksi sendiri, bahan terbaik, jahitan rapi dan kuat, ukuran 1 meter. BAHAN: 💯 Kain Rasfur, 💯 Isi Full Dakron Great A.',
            'stok' => 50,
            'harga' => 175000,
            'gambar' => 'bear_jb.jpg'
        ],
        [
            'id' => 5,
            'nama' => 'Bear Syall Topi',
            'deskripsi' => 'Berstandart SNI, Boneka produksi sendiri, bahan terbaik, jahitan rapi dan kuat, ukuran 1 meter. BAHAN: 💯 Kain Rasfur, 💯 Isi Full Dakron Great A.',
            'stok' => 50,
            'harga' => 175000,
            'gambar' => 'syal_jb.jpg'
        ]
    ];

    public function home()
    {
        return view('home', ['produk' => $this->produk]);
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'admin' && $request->password === '12345') {
            return redirect()->route('dashboard', ['username' => $request->username]);
        }
        return redirect()->route('login')->with('error', 'Username atau password salah');
    }

    public function dashboard(Request $request)
    {
        return view('dashboard', [
            'produk' => $this->produk,
            'username' => $request->query('username')
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username')
        ]);
    }

    public function pengelolaan()
    {
        return view('pengelolaan', ['data' => $this->produk]);
    }

    public function tambahProduk()
    {
        return view('tambah-produk');
    }

    public function simpanProduk(Request $request)
    {
        $produkBaru = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->file('gambar')->store('produk', 'public')
        ];

        return redirect()->route('pengelolaan')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function editProduk($id)
    {
        $produk = collect($this->produk)->firstWhere('id', $id);

        if (!$produk) {
            return redirect()->route('pengelolaan')->with('error', 'Produk tidak ditemukan.');
        }

        return view('edit-produk', compact('produk'));
    }

    public function updateProduk(Request $request, $id)
    {
        $updatedProduk = [
            'id' => $id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar') ? $request->file('gambar')->store('produk', 'public') : $request->old_gambar
        ];

        return redirect()->route('pengelolaan')->with('success', 'Produk berhasil diperbarui!');
    }

     public function hapusProduk($id)
     {
         return redirect()->route('pengelolaan')->with('success', 'Produk berhasil dihapus!');
     }
   
       public function logout()
       {
           return redirect()->route('login')->with('success', 'Berhasil logout!');
       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku_Digital;
use App\Models\Jenis_Buku;
use Illuminate\Support\Facades\Storage;


class DigitalBookController extends Controller
{
    public function index(Request $request)
    {
        // Ambil opsi sort dari request
        $sort = $request->input('sort');

        // Query untuk mengambil data buku dengan urutan berdasarkan pilihan
        if ($sort == '1') {
            // Paling Banyak Dibaca
            $bukus = Buku_Digital::orderBy('jumlah_dibaca', 'desc')->paginate(9);
        } elseif ($sort == '2') {
            // Baru Ditambahkan
            $bukus = Buku_Digital::orderBy('created_at', 'desc')->paginate(9);
        } else {
            // Default (semua buku tanpa urutan tertentu)
            $bukus = Buku_Digital::paginate(9);
        }
        $jumlahBuku = Buku_Digital::count();
        return view('feature.buku.buku-digital', compact('bukus','jumlahBuku'));
    }
    public function detail($id)
    {
        $buku = Buku_Digital::findOrFail($id);
        return view('feature.buku.buku-detail', compact('buku'));
    }


    // Halaman Admin
    public function daftar_buku_digital()
    {
        $bukus = Buku_Digital::all();
        return view('admin.daftar_buku_digital', compact('bukus'));
    }

    public function tambah_buku_digital()
    {
        $bukus = Jenis_Buku::all();
        return view('admin.tambah_buku_digital', compact('bukus'));
    }

    public function daftar_buku_dibaca()
    {
        return view('admin.daftar_buku_dibaca');
    }

    public function daftar_buku_terfavorit()
    {
        return view('admin.daftar_buku_terfavorit');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|digits:4',
            'file_buku' => 'required|file|mimes:pdf',
            'cover_buku' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        // Simpan file buku
        $fileBukuPath = $request->file('file_buku')->store('uploads/buku', 'public');

        // Simpan cover buku
        $coverBukuPath = $request->file('cover_buku')->store('uploads/covers', 'public');

        // Simpan data lainnya ke database
        $buku = new Buku_Digital();
        $buku->judul_buku = $request->input('judul_buku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->sinopsis = $request->input('sinopsis_buku');
        $buku->file_buku = $fileBukuPath;
        $buku->cover_buku = $coverBukuPath;

        // Simpan data ke database
        $buku->save();

        return redirect()->to('/daftar-buku-digital')->with('success', 'Data buku berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|digits:4',
            'sinopsis_buku' => 'required',
            'file_buku' => 'nullable|file|mimes:pdf',
            'cover_buku' => 'nullable|file|mimes:jpeg,png,jpg',
        ]);

        // Temukan buku berdasarkan ID dan perbarui datanya
        $buku = Buku_Digital::findOrFail($id);
        $buku->judul_buku = $request->input('judul_buku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->sinopsis = $request->input('sinopsis_buku');

        // Update file buku jika ada yang baru
        if ($request->hasFile('file_buku')) {
            // Hapus file lama
            Storage::disk('public')->delete($buku->file_buku);

            // Simpan file baru
            $fileBukuPath = $request->file('file_buku')->store('uploads/buku', 'public');
            $buku->file_buku = $fileBukuPath;
        }

        // Update cover buku jika ada yang baru
        if ($request->hasFile('cover_buku')) {
            // Hapus file lama
            Storage::disk('public')->delete($buku->cover_buku);

            // Simpan cover baru
            $coverBukuPath = $request->file('cover_buku')->store('uploads/covers', 'public');
            $buku->cover_buku = $coverBukuPath;
        }

        $buku->save();

        return redirect()->back()->with('success', 'Data buku berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Temukan buku berdasarkan ID dan hapus
        $buku = Buku_Digital::findOrFail($id);
        $buku->delete();

        return redirect()->back()->with('success', 'Data buku berhasil dihapus!');
    }

    public function bacaBuku($id)
{
    // Temukan buku berdasarkan ID
    $buku = Buku_Digital::findOrFail($id);

    // Tambahkan 1 ke jumlah dibaca
    $buku->increment('jumlah_dibaca');

    // Kembalikan response yang mengandung URL file buku
    return response()->json(['file_url' => asset('storage/' . $buku->file_buku)]);
}
}

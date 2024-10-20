<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku_Digital;
use App\Models\Jenis_Buku;
use Illuminate\Support\Facades\Storage;


class DigitalBookController extends Controller
{
    public function index()
    {
        $bukus = Buku_Digital::all();
        return view('feature.buku.buku-digital', compact('bukus'));
    }
    public function detail($id)
    {
        $buku = Buku_Digital::find($id);
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
        return view('admin.tambah_buku_digital');
    }

    public function daftar_buku_dibaca()
    {
        return view('admin.daftar_buku_dibaca');
    }

    public function daftar_buku_terfavorit()
    {
        return view('admin.daftar_buku_terfavorit');
    }

    public function daftar_jenis_buku()
    {
        $bukus = Jenis_Buku::all();
        return view('admin.daftar_jenis_buku', compact('bukus'));
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
        $buku->file_buku = $fileBukuPath;
        $buku->cover_buku = $coverBukuPath;

        // Simpan data ke database
        $buku->save();

        return redirect()->back()->with('success', 'Data buku berhasil disimpan!');
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
}

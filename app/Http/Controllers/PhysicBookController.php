<?php

namespace App\Http\Controllers;

use App\Models\Buku_Fisik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhysicBookController extends Controller
{
    public function index()
    {
        return view('feature.buku.buku-fisik');
    }

        public function detail()
    {
        return view('feature.buku.buku-detail');
    }

    // Halaman Admin
    public function daftar_buku_fisik(){
        $bukus = Buku_Fisik::all();
        return view('admin.daftar_buku_fisik', compact('bukus'));
    }

    public function tambah_buku_fisik(){
        return view('admin.tambah_buku_fisik');
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
            'nomor_buku' => 'required',
            'status' => 'required',
            'cover_buku' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        // Simpan cover buku
        $coverBukuPath = $request->file('cover_buku')->store('uploads/covers_fisik', 'public');

        // Simpan data lainnya ke database
        $buku = new Buku_Fisik();
        $buku->judul_buku = $request->input('judul_buku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->nomor_buku = $request->input('nomor_buku');
        $buku->status = $request->input('status');
        $buku->cover_buku = $coverBukuPath;

        // Simpan data ke database
        $buku->save();

        return redirect()->back()->with('success', 'Data buku berhasil disimpan!');
    }

    public function update_fisik(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|digits:4',
            'nomor_buku' => 'required',
            'status' => 'required',
            'cover_buku' => 'nullable|mimes:jpeg,png,jpg',
        ]);

        // Temukan buku berdasarkan ID dan perbarui datanya
        $buku = Buku_Fisik::findOrFail($id);
        $buku->judul_buku = $request->input('judul_buku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->penulis = $request->input('penulis_buku');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->nomor_buku = $request->input('nomor_buku');
        $buku->status = $request->input('status');

        // Update cover buku jika ada yang baru
        if ($request->hasFile('cover_buku')) {
            // Hapus file lama
            Storage::disk('public')->delete($buku->cover_buku);

            // Simpan cover baru
            $coverBukuPath = $request->file('cover_buku')->store('uploads/covers_fisik', 'public');
            $buku->cover_buku = $coverBukuPath;
        }

        $buku->save();

        return redirect()->back()->with('success', 'Data buku berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Temukan buku berdasarkan ID dan hapus
        $buku = Buku_Fisik::findOrFail($id);
        $buku->delete();

        return redirect()->back()->with('success', 'Data buku berhasil dihapus!');
    }


}

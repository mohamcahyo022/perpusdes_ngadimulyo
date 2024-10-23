<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku_Digital;

class HomeController extends Controller
{
    public function index()
    {
        $bukus = Buku_Digital::select('*')
                            ->selectRaw('jumlah_dibaca + buku_favorit AS popular_score') // Menambahkan bobot favorit ke jumlah dibaca
                            ->orderBy('popular_score', 'desc') // Mengurutkan berdasarkan skor popularitas
                            ->get();

        return view('layout.home', compact('bukus'));
    }

    public function about()
    {
        return view('feature.about.about');
    }

    // Admin

    public function kelola_user(){
        return view('admin.daftar_user');
    }


}

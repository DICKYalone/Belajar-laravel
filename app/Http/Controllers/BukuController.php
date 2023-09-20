<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::orderBy('id', 'DESC')->get();

        return view("buku.index", ["buku" => $buku]);
    }

    public function store(Request $request)
    {
        Buku::create([
            "judul_buku" => $request->judul_buku,
            "harga" => $request->harga,
        ]);

        return redirect()->back();
    }

    public static function show($id)
    {
        $buku = Buku::findOrFail($id);

        return view('buku.showBuku', ["buku" => $buku]);
    }

    public function update($id, Request $request)
    {
        Buku::whereId($id)->update([
            "judul_buku" => $request->judul_buku,
            "harga" => $request->harga
        ]);

        return redirect('buku');
    }

    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();

        return redirect()->back();
    }
}

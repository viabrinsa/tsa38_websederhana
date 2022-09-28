<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel/tampilart', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel/tambahart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('gambar');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $image_name
        ]);

        return redirect('tampilart')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('artikel/editart', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $artikel = Artikel::find($id);
        $file = $request->file('gambar');
        $gambar = '';

        if ($file) {
            $gambar = $file->store('images', 'public');

            if (Storage::exists('public/' . $artikel->gambar)) {
                Storage::delete('public/' . $artikel->gambar);
            }
        }

        if (!empty($request->file('gambar'))) {
            Artikel::where('id_artikel', $id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $gambar
            ]);
        } else {
            Artikel::where('id_atikel', $id)->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $gambar
            ]);
        }

        return redirect('tampilart')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::where('id_artikel', $id)->delete();
        return redirect()->back()->with('success', 'Artikel Berhasil Dihapus');
    }

    public function cetak_pdf()
    {
        $artikel = Artikel::all();
        return view('cetak_pdf', compact('artikel'));
    }
}

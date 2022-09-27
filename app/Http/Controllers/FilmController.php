<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilfilm()
    {
        $data = Film::all();
        return view('film/tampilfilm', ['data' => $data]);
    }

    public function dataFilm()
    {

        return view('film/tampilfilm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfilm()
    {
        return view('film/tambahfilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefilm(Request $request)
    {
        $rules = [
            'judulfilm' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:255',
            'genre' => 'required|string|max:50',
            'poster' => 'required|image|mimes:jpg,jpeg,png'
        ];

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return view('tambahfilm')->with('error', $validator->errors());
        // }

        $file = $request->file('poster');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Film::create([
            'judulfilm' => $request->input('judulfilm'),
            'deskripsi' => $request->input('deskripsi'),
            'genre' => $request->input('genre'),
            'poster' => $image_name
        ]);

        return redirect('tampilfilm')->with('success', 'Film Berhasil Disimpan');
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
    public function editfilm($id)
    {
        $data = Film::find($id);
        return view('film/editfilm', ['data' => $data]);
    }
    public function updatefilm(Request $request, $id)
    {
        $rules = [
            'judulfilm' => 'required|string|max:50',
            'deskripsi' => 'required|string|max:255',
            'genre' => 'required|string|max:50',
            'poster' => 'required|image|mimes:jpg,jpeg,png'
        ];


        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return view('tambahfilm')->with('error', $validator->errors());
        // }

        $data = Film::find($id);
        $file = $request->file('poster');
        $poster = '';

        if ($file) {
            $poster = $file->store('images', 'public');
            if (Storage::exists('public/' . $data->poster)) {
                Storage::delete('public/' . $data->poster);
            }
        }

        if (!empty($request->file('poster'))) {
            Film::where('id_film', $id)->update([
                'judulfilm' => $request->judulfilm,
                'deskripsi' => $request->deskripsi,
                'genre' => $request->genre,
                'poster' => $poster
            ]);
        } else {
            Film::where('id_film', $id)->update([
                'judulfilm' => $request->judulfilm,
                'deskripsi' => $request->deskripsi,
                'genre' => $request->genre,
            ]);
        }

        return redirect('tampilfilm')->with('success', 'Film Berhasil Diupdate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Film::where('id_film', $id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }


    public function cetak_pdf()
    {
        $data = Film::all();
        return view('cetak_pdf', compact('data'));
    }
}

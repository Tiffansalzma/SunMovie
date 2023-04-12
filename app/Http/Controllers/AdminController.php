<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if (strlen($katakunci)) {
            $data = admin::where('judul_film', "like")
                ->paginate($jumlahbaris);
        } else {
            $data = admin::orderby('judul_film', 'asc')->paginate($jumlahbaris);
        }
        return view('admin.admin')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('judul_film', $request->judul_film);
        Session::flash('genre', $request->genre);
        Session::flash('durasi', $request->durasi);
        Session::flash('bioskop', $request->bioskop);

        $request->validate([
            'judul_film' => 'required | unique:admins,judul_film',
            'genre' => 'required',
            'durasi' => 'required',
            'bioskop' => 'required'
        ], [
                'judul_film.required' => 'Judul Film wajib diisi',
                'judul_film.unique' => 'Judul Film sudah ada dalam database',
                'genre.required' => 'Genre wajib diisi',
                'durasi.required' => 'Durasi Film wajib diisi',
                'bioskop.required' => 'Bioskop Film wajib diisi'
            ]);
        $data = [
            'judul_film' => $request->judul_film,
            'genre' => $request->genre,
            'durasi' => $request->durasi,
            'bioskop' => $request->bioskop
        ];
        admin::create($data);
        return redirect()->to('home-admin')->with('success', 'Berhasil menambahkan film');
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
        $data = admin::where('judul_film', $id)->first();
        return view('admin.edit')->with('data', $data);
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
        $request->validate([
            'genre' => 'required',
            'durasi' => 'required',
            'bioskop' => 'required'
        ], [
                'genre.required' => 'Genre wajib diisi',
                'durasi.required' => 'Durasi Film wajib diisi',
                'bioskop.required' => 'Bioskop Film wajib diisi'
            ]);
        $data = [
            'genre' => $request->genre,
            'durasi' => $request->durasi,
            'bioskop' => $request->bioskop
        ];
        admin::where('judul_film', $id)->update($data);
        return redirect()->to('home-admin')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('judul_film', $id)->delete();
        return redirect()->to('home-admin')->with('success', 'Berhasil melakukan delete data');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index')->with([
            'siswa' => siswa::all(), 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIS' => 'required|min:9',
            'Nama' => 'required|min:3|max:255',
            'Jurusan' => 'required|min:3',
        ]);

        $siswa = new siswa;
        $siswa->NIS = $request->NIS;
        $siswa->Nama = $request->Nama;
        $siswa->Jurusan = $request->Jurusan;
        $siswa->save();

        return to_route('siswa.index')->with('success', 'Data Berhasil Di Tambah');
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
        return view('siswa.edit')->with([
            'siswa' => Siswa::find($id), 
        ]);
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
            'NIS' => 'required|min:9|max:9',
            'Nama' => 'required|min:3|max:255',
            'Jurusan' => 'required|min:3',
        ]);

        $siswa = Siswa::find($id);
        $siswa->NIS = $request->NIS;
        $siswa->Nama = $request->Nama;
        $siswa->Jurusan = $request->Jurusan;
        $siswa->save();

        return to_route('siswa.index')->with('success', 'Data Berhasil Di Edit');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();

        return back()->with('success-del', 'Data Berhasil Di Hapus');
    }
}

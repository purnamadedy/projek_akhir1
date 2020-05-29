<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Jabatan;
use App\Status;
use App\Pendidikan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', ['karyawan' => Karyawan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $status = Status::all();
        $pendidikan = Pendidikan::all();
        return view('karyawan.create', compact('status', 'jabatan', 'pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'jenis' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
            'pendidikan_id' => 'required',
            'tgl_masuk' => 'required'
        ]);

        $karyawan = Karyawan::create($validatedData);
        // $telepon = New Telepon;
        // $telepon->nomer_telepon = $request->input('nomer_telepon');
        // $karyawan->telepon()->save($telepon);
        // $karyawan->hobi()->attach($request->hobi);
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $jabatan = Jabatan::all();
        $status = Status::all();
        $pendidikan = Pendidikan::all();
        return view('karyawan.edit', ['karyawan' => $karyawan, 'status' => $status, 'jabatan' => $jabatan, 'pendidikan' => $pendidikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'jenis' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
            'pendidikan_id' => 'required',
            'tgl_masuk' => 'required'

        ]);
        $karyawan->update($validatedData);
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        // Karyawan::destroy($karyawan->id);
        $karyawan = Karyawan::findOrFail($karyawan->id);
        $karyawan->delete();
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Hapus');
    }
}

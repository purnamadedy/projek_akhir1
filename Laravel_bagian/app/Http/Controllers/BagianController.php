<?php

namespace App\Http\Controllers;

use App\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bagian.index', ['bagian' => Bagian::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bagian.create');
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

            'nama_bagian' => 'required',
            'nama' => 'required',
            'jumlah_bagian' => 'required'

        ]);

        Bagian::create($request->all());
        return redirect('/bagian')->with('status', 'Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function show(Bagian $bagian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function edit(Bagian $bagian)
    {
        // return view('bagian.edit', ['bagian' => Bagian::all()]);
        return view('bagian.edit', compact('bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bagian $bagian)
    {
        Bagian::where('id', $bagian->id)
            ->update([

                'nama_bagian' => $request->nama_bagian,
                'nama' => $request->nama,
                'jumlah_bagian' => $request->jumlah_bagian

             ]);
        // Bagian::where($request->all());
        return redirect('/bagian')->with('status', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bagian  $bagian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bagian $bagian)
    {
        Bagian::destroy($bagian->id);
        return redirect('/bagian')->with('status', 'Data Berhasil Di Hapus');
    }
}

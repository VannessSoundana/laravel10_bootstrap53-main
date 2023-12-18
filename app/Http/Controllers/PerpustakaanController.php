<?php

namespace App\Http\Controllers;

use App\Models\perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{

    public function index()
    {
        $perpustakaan = perpustakaan::get();
        return view('perpustakaan.index', compact('perpustakaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('perpustakaan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perpustakaan = new perpustakaan();
        $perpustakaan->nama_petugas = $request->nama_petugas;
        $perpustakaan->alamat = $request->alamat;
        $perpustakaan->nohp = $request->nohp;
        $perpustakaan->save();
        return redirect()->route('perpustakaan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perpustakaan = perpustakaan::find($id);
        return view('perpustakaan.edit', compact('perpustakaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perpustakaan = perpustakaan::find($id);
        $perpustakaan->nama_petugas = $request->nama_petugas;
        $perpustakaan->alamat = $request->alamat;
        $perpustakaan->nohp = $request->nohp;
        $perpustakaan->update();
        return redirect()->route('perpustakaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        perpustakaan::destroy($id);
        return redirect()->route('perpustakaan.index');
    }
}

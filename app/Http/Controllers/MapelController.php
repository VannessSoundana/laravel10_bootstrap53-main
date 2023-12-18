<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    
    public function index()
    {
        $mapel = Mapel::get();
        return view('mapel.index', compact('mapel'));
    }

   
    public function create()
    {
        return view ('mapel.add');
    }

   
    public function store(Request $request)
    {
        $mapel = new Mapel();
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->jam = $request->jam;
        $mapel->save();
        return redirect()->route('mapel.index');
    }

   
    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $mapel = Mapel::find($id);
        return view('mapel.edit', compact('mapel'));
    }

  
    public function update(Request $request, string $id)
    {
        
        $mapel = Mapel::find($id);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->jam = $request->jam;
        $mapel->update();
        return redirect()->route('mapel.index');
    }

    public function destroy(string $id)
    {
        Mapel::destroy($id);
        return redirect()->route('mapel.index');
    }
}

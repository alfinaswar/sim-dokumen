<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use Illuminate\Http\Request;

class MasterKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MasterKategori::latest()->get();
        return view('master.kategori.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        MasterKategori::create($data); // Perbaiki metode create()

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(MasterKategori $masterKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MasterKategori::find($id);
        return view('master.kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori = MasterKategori::findOrFail($id);
        $kategori->NamaKategori = $request->input('NamaKategori');
        $kategori->save();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = MasterKategori::find($id);
        $kategori->delete();

        return response()->json(['success' => 'Data Berhasil Dihapus']);
    }
}

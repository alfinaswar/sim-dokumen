<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use App\Models\SituasiMaritim;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use DB;

class SituasiMaritimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = MasterKategori::with('getSituasiMaritim')->orderBy('id', 'DESC')->latest()->get();
        // return $kategori;
        return view('situasi-maritim.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($id)
    {
        $data = SituasiMaritim::find($id);
        return view('situasi-maritim.detail', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SituasiMaritim::create($request->all());
        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = MasterKategori::with('getSituasiMaritim')->orderBy('id', 'DESC')->where('id', $id)->get();
        return view('situasi-maritim.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = MasterKategori::get();
        $data = SituasiMaritim::find($id);
        return view('situasi-maritim.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = SituasiMaritim::findOrFail($id);
        $data->Kategori = $request->Kategori;
        $data->Lokasi = $request->Lokasi;
        $data->Waktu = $request->Waktu;
        $data->Keterangan = $request->Keterangan;
        $data->save();
        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kapal = SituasiMaritim::findOrFail($id);
        $kapal->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}

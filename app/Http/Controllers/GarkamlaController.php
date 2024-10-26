<?php

namespace App\Http\Controllers;

use App\Models\Garkamla;
use App\Models\MasterKategori;
use Illuminate\Http\Request;

class GarkamlaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $garkamla = Garkamla::with('getKategori')
            ->when($request->tahun, function ($query, $tahun) {
                return $query->whereYear('created_at', $tahun);
            })
            ->get();
        $jumlahPelanggaran = $garkamla->sum('Pelanggaran');
        $jumlahKejahatan = $garkamla->sum('KejahatanLinstasBatas');
        $jumlahKejadian = $garkamla->sum('Kejadian');
        $datachart = [
            ['Pelanggaran', $jumlahPelanggaran],
            ['Kejahatan Lintas Batas', $jumlahKejahatan],
            ['Kejadian', $jumlahKejadian],
        ];
        $datajson = json_encode($datachart);
        return view('garkamla.index', compact('garkamla', 'datajson'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = MasterKategori::get();
        return view('garkamla.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Garkamla::create($request->all());
        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Garkamla $garkamla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Garkamla::findOrFail($id);
        $kategori = MasterKategori::get();
        return view('garkamla.edit', compact('kategori', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = Garkamla::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('garkamla.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Garkamla $garkamla)
    {
        //
    }
}

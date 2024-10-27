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
        $jumlahKejahatan = $garkamla->sum('KejahatanLintasBatas');
        $jumlahKejadian = $garkamla->sum('Kejadian');

        // Susun data dengan header kolom
        $datachart = [
            ['Tipe', 'Jumlah'], // Header kolom
            ['Pelanggaran', $jumlahPelanggaran],
            ['Kejahatan Lintas Batas', $jumlahKejahatan],
            ['Kejadian', $jumlahKejadian],
        ];

        $datajson = json_encode($datachart);

        $garkamla2 = Garkamla::with('getKategori')
            ->selectRaw('YEAR(created_at) as year, COUNT(*) as jumlah')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();

        $dataPerTahun = Garkamla::selectRaw('YEAR(created_at) as year')
            ->selectRaw('SUM(Pelanggaran) as jumlahPelanggaran')
            ->selectRaw('SUM(KejahatanLintasBatas) as jumlahKejahatan')
            ->selectRaw('SUM(Kejadian) as jumlahKejadian')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();

        $datachart2 = $dataPerTahun->map(function ($data) {
            return [
                'year' => $data->year,
                'jumlahPelanggaran' => $data->jumlahPelanggaran,
                'jumlahKejahatan' => $data->jumlahKejahatan,
                'jumlahKejadian' => $data->jumlahKejadian,
            ];
        });

        $datajson2 = json_encode($datachart2);

        return view('garkamla.index', compact('garkamla', 'datajson', 'datajson2'));
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

<?php

namespace App\Http\Controllers;

use App\Models\PantauanKapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantauanKapalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PantauanKapal::latest()->get();
        $Asing = PantauanKapal::where('NegaraKapal', '!=', 'Indonesia')->get();
        $jumlahKapalPerNegara = PantauanKapal::select('NegaraKapal', DB::raw('count(*) as jumlah'))
            ->groupBy('NegaraKapal')
            ->get();

        $Tipekapal = PantauanKapal::select('JenisKapal', DB::raw('count(*) as JumlahTipe'))
            ->groupBy('NegaraKapal')
            ->get();
        return view('pantauan-kapal.index', compact('data', 'Asing', 'jumlahKapalPerNegara', 'Tipekapal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pantauan-kapal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        PantauanKapal::create([
            'MMSI' => $request->mmsi,
            'NamaKapal' => $request->nama_kapal,
            'NegaraKapal' => $request->negara_kapal,
            'JenisKapal' => $request->jenis_kapal,
            'Gambar' => $imageName,
            'Keterangan' => $request->keterangan,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data pemantauan kapal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PantauanKapal $pantauanKapal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = PantauanKapal::findOrFail($id);
        return view('pantauan-kapal.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kapal = PantauanKapal::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $kapal->Gambar = $imageName;
        } else {
            $kapal->Gambar = null;
        }

        $kapal->MMSI = $request->mmsi;
        $kapal->NamaKapal = $request->nama_kapal;
        $kapal->NegaraKapal = $request->negara_kapal;
        $kapal->JenisKapal = $request->jenis_kapal;
        $kapal->Keterangan = $request->keterangan;

        $kapal->save();

        return redirect()->route('pantauan-kapal.index')->with('success', 'Data pemantauan kapal berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kapal = PantauanKapal::findOrFail($id);
        $kapal->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}

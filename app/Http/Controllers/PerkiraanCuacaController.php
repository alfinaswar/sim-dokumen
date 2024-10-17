<?php

namespace App\Http\Controllers;

use App\Models\PerkiraanCuaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerkiraanCuacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PerkiraanCuaca::latest()->get();
        return view('perkiraan-cuaca.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perkiraan-cuaca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Simpan data ke database
        $perkiraanCuaca = new PerkiraanCuaca;
        $perkiraanCuaca->Wilayah = $request->wilayah;
        $perkiraanCuaca->TanggalBerlaku = $request->tanggal_berlaku;
        $perkiraanCuaca->TanggalBerakhir = $request->tanggal_berakhir;
        $perkiraanCuaca->Cuaca = $request->cuaca;
        $perkiraanCuaca->Angin = $request->angin;
        $perkiraanCuaca->ArahAngin = $request->arah_angin;
        $perkiraanCuaca->Gelombang = $request->gelombang;
        $perkiraanCuaca->TinggiGelombang = $request->input('tinggi-gelombang');
        $perkiraanCuaca->Peringatan = $request->peringatan;

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('images', 'public');
            $perkiraanCuaca->Gambar = $path;
        } else {
            $perkiraanCuaca->Gambar = null;
        }
        $perkiraanCuaca->keterangan = $request->Keterangan;
        $perkiraanCuaca->save();

        return redirect()->route('perkiraan-cuaca.index')->with('success', 'Data perkiraan cuaca berhasil disimpan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $data = PerkiraanCuaca::find($id);
        return view('perkiraan-cuaca.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $data = PerkiraanCuaca::findOrFail($id);
        return view('perkiraan-cuaca.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $data = PerkiraanCuaca::findOrFail($id);
        $data->Wilayah = $request->wilayah;
        $data->TanggalBerlaku = $request->tanggal_berlaku;
        $data->TanggalBerakhir = $request->tanggal_berakhir;
        $data->Cuaca = $request->cuaca;
        $data->Angin = $request->angin;
        $data->ArahAngin = $request->arah_angin;
        $data->Gelombang = $request->gelombang;
        $data->TinggiGelombang = $request->tinggi_gelombang;
        $data->Peringatan = $request->peringatan;
        $data->Keterangan = $request->keterangan;

        if ($request->hasFile('gambar')) {
            if ($data->Gambar) {
                Storage::disk('public')->delete($data->gambar);
            }

            $file = $request->file('gambar');
            $path = $file->store('images', 'public');
            $data->Gambar = $path;
        }

        $data->save();

        return redirect()->route('perkiraan-cuaca.index')->with('success', 'Data perkiraan cuaca berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kapal = PerkiraanCuaca::findOrFail($id);
        $kapal->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}

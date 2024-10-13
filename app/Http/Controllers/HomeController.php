<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = MasterKategori::with([
            'getSituasiMaritim' => function ($query) {
                $query
                    ->select('*', DB::raw('count(*) as KategoriKejadian'))
                    ->groupBy('Kategori');
            }
        ])->orderBy('id', 'DESC')->get();
        // dd($kategori);
        return view('home',compact('kategori'));
    }
}

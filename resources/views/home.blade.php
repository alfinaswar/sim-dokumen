@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h3>Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html" data-bs-original-title="" title="">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid general-widget">
        <div class="row">
            @foreach ($kategori as $index => $item)
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="{{ $index % 2 == 0 ? 'bg-primary' : 'bg-secondary' }} b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center">
                                    <img src="{{ asset('assets/icon/' . $item->Icon) }}">
                                </div>
                                <div class="media-body">
                                    <span class="m-0">{{ $item->NamaKategori }}</span>
                                    <h4 class="mb-0">{{ $item->getSituasiMaritim[0]->KategoriKejadian ?? 0 }} Data</h4>

                                    <!-- Tambahkan tombol View di sini -->
                                    <div class="mt-2">
                                        <a href="{{ route('situasi-maritim.show', $item->id) }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('assets/images/avatar/gambar-peta.jpeg') }}" width="auto">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

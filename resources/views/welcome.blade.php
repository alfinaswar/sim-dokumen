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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                                <div class="media-body">
                                    <span class="m-0">{{ $item->NamaKategori }}</span>
                                    <h4 class="mb-0">{{ $item->getSituasiMaritim[0]->KategoriKejadian ?? 0 }} Data</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-database icon-bg">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                    <!-- Tambahkan tombol View di sini -->
                                    <div class="mt-2">
                                        <a href="" class="btn btn-sm btn-light">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

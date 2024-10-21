@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Perkiraan Cuaca</h3>
                    <ol class="breadcrumb">

                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->

                    <!-- Bookmark Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-page-main p-0">
            <div class="col-xl-4 col-md-6 box-col-12 xl-50">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 product-main">
                                <div class="pro-slide-single">
                                    <div>
                                        <img class="img-fluid" src="{{ asset('storage/' . $data->Gambar) }}"
                                            alt="Description of the image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 box-col-7 proorder-xl-3 xl-100">
                <div class="card">
                    <div class="card-body">
                        <div class="pro-group pt-0 border-0 mb-3">
                            <div class="product-page-details mt-0">
                                <h3>Pantauan Kapal:</h3>

                            </div>
                            <div class="product-price"><small>Dikeluarkan pada {{ $data->created_at }}</small><br>


                            </div>

                        </div>
                        <div class="pro-group">
                            <h5>Detail Informasi {{ $data->Wilayah }}</h5>
                            <div class="row">
                                <div class="col-sm text-center">
                                    <p>Nama Kapal</p>
                                    <p class="fw-bold">{{ $data->NamaKapal }}</p>
                                </div>
                                <div class="col-sm text-center">
                                    <p>Negara Kapal</p>

                                    <p class="fw-bold">{{ $data->NegaraKapal }}</p>
                                </div>
                                <div class="col-sm text-center">
                                    <p>Jenis Kapal</p>


                                    <p class="fw-bold">{{ $data->JenisKapal }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="pro-group">
                            <h5>Ketrangan {{ $data->Wilayah }}</h5>
                            <div class="row">
                                <p>{{ $data->Keterangan }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
@endsection

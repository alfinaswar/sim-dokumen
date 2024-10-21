@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Situasi Maritim</h3>
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
    <div class="container-fluid ">

        <div class="row product-page-main p-0 justify-content-center">

            <div class="col-xl-7 box-col-7 proorder-xl-3 xl-100">
                <div class="card">
                    <div class="card-body">
                        <div class="pro-group pt-0 border-0">
                            <div class="product-page-details mt-0">
                                <h3>Detail Situasi Maritim:
                                    {{ \Carbon\Carbon::parse($data->Waktu)->format('d F Y') }}</h3>


                                <div class="pro-review">

                                </div>
                            </div>
                            <div class="product-price"><small>Dikeluarkan pada {{ $data->created_at }}</small><br>


                            </div>

                        </div>
                        <div class="pro-group d-flex justify-content-between">
                            <div>
                                <h5>Kategori</h5>
                                <p>{{ $data->getKategori->NamaKategori }}</p>
                            </div>
                            <div>

                                <img src="{{ asset('assets/icon/' . $data->getKategori->Icon) }}" alt="Gambar Kategori"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="pro-group">
                            <h5>Lokasi</h5>
                            <p>{{ $data->Lokasi }}</p>
                        </div>
                        <div class="pro-group">
                            <h5>Keterangan</h5>
                            <div class="row">

                                <p class="fw-bold">{{ $data->Keterangan }}</p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
@endsection

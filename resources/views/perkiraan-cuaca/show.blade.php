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
        <div>
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
                            <div class="pro-group pt-0 border-0">
                                <div class="product-page-details mt-0">
                                    <h3>Pantauan Cuaca: {{ \Carbon\Carbon::parse($data->TanggalBerlaku)->format('d F Y') }}
                                        - {{ \Carbon\Carbon::parse($data->TanggalBerakhir)->format('d F Y') }}</h3>


                                    <div class="pro-review">

                                    </div>
                                </div>
                                <div class="product-price"><small>Dikeluarkan pada {{ $data->created_at }}</small><br>
                                    <small>Berlaku Mulai {{ $data->TanggalBerlaku }}</small>

                                </div>

                            </div>
                            <div class="pro-group">
                                <h5>Peringatan</h5>
                                <p>{{ $data->Peringatan }}</p>
                            </div>
                            <div class="pro-group">
                                <h5>Kondisi Sinoptik</h5>
                                <p>{{ $data->Keterangan }}</p>
                            </div>
                            <div class="pro-group">
                                <h5>Perkiraan Area {{ $data->Wilayah }}</h5>
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <p>Cuaca</p>
                                        @if ($data->Cuaca == 'Cerah')
                                            <img src="{{ asset('assets/images/avatar/cerah.png') }}">
                                        @elseif ($data->Cuaca == 'Berawan')
                                            <img src="{{ asset('assets/images/avatar/berawan.png') }}">
                                        @elseif ($data->Cuaca == 'Hujan Ringan')
                                            <img src="{{ asset('assets/images/avatar/hujanringan.png') }}">
                                        @elseif ($data->Cuaca == 'Hujan Berat')
                                            <img src="{{ asset('assets/images/avatar/hujanberat.png') }}">
                                        @else
                                            <img src="{{ asset('assets/images/avatar/badai.png') }}">
                                        @endif
                                        <p class="fw-bold">{{ $data->Cuaca }}</p>
                                    </div>
                                    <div class="col-sm text-center">
                                        <p>Angin</p>
                                        <br><br>
                                        <p class="fs-md-4 fw-bold">{{ $data->Angin }}</p>
                                        <br>
                                        <p class="fw-bold">{{ $data->ArahAngin }}</p>
                                    </div>
                                    <div class="col-sm text-center">
                                        <p>Gelombang</p>
                                        <br><br>
                                        <p class="fs-md-4 fw-bold">{{ $data->Gelombang }}</p>
                                        <br>
                                        <p class="fw-bold">{{ $data->TinggiGelombang }} Meter</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

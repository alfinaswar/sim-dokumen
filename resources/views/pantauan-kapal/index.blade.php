@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Pantauan Kapal</h5><span></span>
                    @auth

                        <a href="{{ route('pantauan-kapal.create') }}" class="btn btn-primary float-end">
                            Tambah Data
                        </a>
                    @endauth
                </div>
                <div class="card-body">
                    @auth
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th width="3%">No</th>
                                        <th>MMSI</th>
                                        <th>Nama Kapal</th>
                                        <th>Negara Kapal</th>
                                        <th>Jenis Kapal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $i)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $i->MMSI }}</td>
                                            <td>{{ $i->NamaKapal }}</td>
                                            <td>{{ $i->NegaraKapal }}</td>
                                            <td>{{ $i->JenisKapal }}</td>
                                            <td> <a class="btn btn-warning btn-edit"
                                                    href="{{ route('pantauan-kapal.edit', $i->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-delete" data-id="{{ $i->id }}">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    @endauth <br> <br>
                    <center>
                        <h3>Kapal Asing</h3>
                    </center>
                    <br>
                    <table class="table table-responsive-sm" border="1" width="100%">

                        <head>
                            <tr>
                                <th>MMSI</th>
                                <th>Nama Kapal</th>
                                <th>Negara Kapal</th>
                                <th>Jenis Kapal</th>
                            </tr>
                        </head>
                        <tbody>
                            @foreach ($Asing as $asing)
                                <tr>
                                    <td>{{ $asing->MMSI }}</td>
                                    <td>{{ $asing->NamaKapal }}</td>
                                    <td>{{ $asing->NegaraKapal }}</td>
                                    <td>{{ $asing->JenisKapal }}</td>
                                </tr>
                            @endforeach

                            <td></td>

                        </tbody>
                    </table>
                    <br> <br>
                    <div class="row">
                        <div class="col-md-6">
                            <center>
                                <h4>Jumlah Kapal Per Negara</h4>
                            </center>
                            <table class="table table-responsive-sm" border="1" width="100%">

                                <head>
                                    <tr>
                                        <th>Negara Kapal</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </head>
                                <tbody>
                                    @foreach ($jumlahKapalPerNegara as $negarakapal)
                                        <tr>
                                            <td>{{ $negarakapal->NegaraKapal }}</td>
                                            <td>{{ $negarakapal->jumlah }}</td>
                                        </tr>
                                    @endforeach

                                    <td></td>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <h4>Jumlah Tipe Kapal</h4>
                            </center>
                            <table class="table table-responsive-sm" border="1" width="100%">

                                <head>
                                    <tr>
                                        <th>Negara Kapal</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </head>
                                <tbody>
                                    @foreach ($Tipekapal as $tipe)
                                        <tr>
                                            <td>{{ $tipe->JenisKapal }}</td>
                                            <td>{{ $tipe->JumlahTipe }}</td>
                                        </tr>
                                    @endforeach

                                    <td></td>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <br>

                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('body').on('click', '.btn-delete', function() {
                var id = $(this).data('id');

                Swal.fire({
                    title: 'Hapus Data',
                    text: "Anda Ingin Menghapus Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('pantauan-kapal.destroy', ':id') }}'.replace(
                                ':id',
                                id),
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Dihapus',
                                    'Data Berhasil Dihapus',
                                    'success'
                                );

                                location.reload();
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Failed!',
                                    'Error',
                                    'error'
                                );
                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection

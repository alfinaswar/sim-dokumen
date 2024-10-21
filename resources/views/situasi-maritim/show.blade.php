@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Data Situasi Maritim</h5>
                    <!-- Tombol untuk membuka modal -->
                    @auth
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#kategoriModal">
                            Tambah Data
                        </button>
                    @endauth
                </div>
                <div class="card-body">
                    @foreach ($data as $key => $kat)
                        <div class="card-block row">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm" border="1" width="100%">
                                        <thead style="background-color:{{ $kat->WarnaTabel }}">
                                            <tr>
                                                <th width="4%" class="text-white">#</th>
                                                <th width="22%" class="text-light">{{ $kat->NamaKategori }} </th>
                                                <th width="22%" class="text-light">Lokasi</th>
                                                <th width="32%" class="text-light">Waktu</th>
                                                <th width="32%" class="text-light">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kat->getSituasiMaritim as $no => $detail)
                                                <tr>
                                                    <th scope="row">{{ $no + 1 }}</th>
                                                    <td>{{ $kat->NamaKategori }} Kejadian</td>
                                                    <td>{{ $detail->Lokasi }}</td>
                                                    <td>{{ $detail->Waktu }}</td>
                                                    <td> @auth
                                                            <a class="btn btn-warning btn-edit"
                                                                href="{{ route('situasi-maritim.edit', $detail->id) }}">Edit</a>
                                                            <a class="btn btn-danger btn-delete"
                                                                data-id="{{ $detail->id }}">Hapus</a>
                                                        @else
                                                            <a class="btn btn-secondary btn-edit"
                                                                href="{{ route('situasi-maritim.detail', $detail->id) }}"><i
                                                                    class="fas fa-info-circle"></i></a>
                                                        @endauth
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



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
                            url: '{{ route('situasi-maritim.destroy', ':id') }}'.replace(
                                ':id', id),
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

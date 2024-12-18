@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Data Situasi Maritim</h5>
                    <!-- Tombol untuk membuka modal -->
                    @auth
                        @if (auth()->user()->role == 'Admin')
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#kategoriModal">
                                Tambah Data
                            </button>
                        @endif
                    @endauth
                </div>
                <div class="card-body">
                    @foreach ($kategori as $key => $kat)
                        <div class="card-block row">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm" border="1" width="100%">
                                        <thead style="background-color:{{ $kat->WarnaTabel }}">
                                            <tr>
                                                <th width="4%" class="text-white">#</th>
                                                <th width="22%" class="text-light">{{ $kat->NamaKategori }} </th>
                                                <th width="22%" class="text-light">Lokasi</th>
                                                <th width="22%" class="text-light">Waktu</th>
                                                @auth
                                                    @if (auth()->user()->role == 'Admin')
                                                        <th width="12%" class="text-light">Keterangan</th>
                                                        <th width="32%" class="text-light">Aksi</th>
                                                    @else
                                                        <th width="12%" class="text-light">Keterangan</th>
                                                        <th width="32%" class="text-light">Aksi</th>
                                                    @endif
                                                @endauth
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($kat->getSituasiMaritim) < 1)
                                                <tr>
                                                    <td colspan="6" class="text-center">Tidak Ada Data Hari Ini</td>
                                                </tr>
                                            @else
                                                @foreach ($kat->getSituasiMaritim as $no => $detail)
                                                    <tr>
                                                        <th scope="row">{{ $no + 1 }}</th>
                                                        <td>{{ $kat->NamaKategori }} Kejadian</td>
                                                        <td>{{ $detail->Lokasi }}</td>
                                                        <td>{{ $detail->Waktu }}</td>
                                                        @auth
                                                            @if (auth()->user()->role == 'Admin')
                                                                <td>{{ $detail->Keterangan }}</td>
                                                                <td>
                                                                    <a class="btn btn-info btn-edit"
                                                                        href="{{ route('situasi-maritim.edit', $detail->id) }}"><i
                                                                            class="fas fa-edit"></i></a>
                                                                    <a class="btn btn-danger btn-delete"
                                                                        data-id="{{ $detail->id }}"><i
                                                                            class="fas fa-trash"></i></a>
                                                                    <a class="btn btn-secondary btn-edit"
                                                                        href="{{ route('situasi-maritim.detail', $detail->id) }}"><i
                                                                            class="fas fa-info-circle"></i></a>
                                                                </td>
                                                            @else
                                                                <td>{{ $detail->Keterangan }}</td>
                                                                <td><a class="btn btn-secondary btn-edit"
                                                                        href="{{ route('situasi-maritim.detail', $detail->id) }}"><i
                                                                            class="fas fa-info-circle"></i></a></td>
                                                            @endif

                                                        @endauth

                                                    </tr>
                                                @endforeach
                                            @endif

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
    </div>

    <div class="modal fade" id="kategoriModal" tabindex="-1" aria-labelledby="kategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kategoriModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="kategoriForm" action="{{ route('situasi-maritim.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="Kategori" class="form-control">
                                <option>Pilih Kategori</option>
                                @foreach ($kategori as $i)
                                    <option value="{{ $i->id }}">{{ $i->NamaKategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="Lokasi" placeholder="Lokasi"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="datetime-local" class="form-control" id="waktu" name="Waktu"
                                placeholder="Waktu" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="Keterangan" placeholder="Keterangan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="update-id">
                        <div class="mb-3">
                            <label for="update-kategori" class="form-label">Kategori</label>
                            <select name="Kategori" class="form-control" id="update-kategori">
                                <option>Pilih Kategori</option>
                                @foreach ($kategori as $i)
                                    <option value="{{ $i->id }}">{{ $i->NamaKategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="update-lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="update-lokasi" name="Lokasi"
                                placeholder="Lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="update-waktu" class="form-label">Waktu</label>
                            <input type="datetime-local" class="form-control" id="update-waktu" name="Waktu" required>
                        </div>
                        <div class="mb-3">
                            <label for="update-keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="update-keterangan" name="Keterangan" placeholder="Keterangan" rows="3"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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

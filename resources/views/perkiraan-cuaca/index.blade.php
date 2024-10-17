@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Perkiraan Cuaca</h5><span></span>
                    <a href="{{ route('perkiraan-cuaca.create') }}" class="btn btn-primary float-end">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th width="3%">No</th>
                                    <th>Wilayah</th>
                                    <th>Berlaku</th>
                                    <th>Berakhir</th>
                                    <th>Cuaca</th>
                                    <th>Angin</th>
                                    <th>Gelombang</th>
                                    <th>Peringatan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $no => $i)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $i->Wilayah }}</td>
                                        <td>{{ $i->TanggalBerlaku }}</td>
                                        <td>{{ $i->TanggalBerakhir }}</td>
                                        <td>{{ $i->Cuaca }}</td>
                                        <td>{{ $i->Angin }}</td>
                                        <td>{{ $i->Gelombang }}</td>
                                        <td>{{ $i->Peringatan }}</td>

                                        <td>{{ $i->Keterangan }}</td>
                                        <td>
                                            <a class="btn btn-secondary btn-edit"
                                                href="{{ route('perkiraan-cuaca.show', $i->id) }}">
                                                <i class="fas fa-info-circle"></i> <!-- Icon for Detail -->
                                            </a>
                                            <a class="btn btn-warning btn-edit"
                                                href="{{ route('perkiraan-cuaca.edit', $i->id) }}">
                                                <i class="fas fa-edit"></i> <!-- Icon for Edit -->
                                            </a>
                                            <a class="btn btn-danger btn-delete" data-id="{{ $i->id }}">
                                                <i class="fas fa-trash-alt"></i> <!-- Icon for Hapus -->
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                            url: '{{ route('perkiraan-cuaca.destroy', ':id') }}'.replace(
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

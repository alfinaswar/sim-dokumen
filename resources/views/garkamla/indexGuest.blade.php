@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Pantauan Kapal</h5><span></span>
                    @auth
                        <a href="{{ route('garkamla.create') }}" class="btn btn-primary float-end">
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
                                        <th>Jenis Garkamla</th>
                                        <th>Pelanggaran</th>
                                        <th>Kejahatan Lintas Batas</th>
                                        <th>Keselamatan</th>
                                        <th>Kejadian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($garkamla as $item)
                                        <tr>
                                            <td>{{ $item->getKategori->NamaKategori }}</td>
                                            <td>{{ $item->Pelanggaran }}</td>
                                            <td>{{ $item->KejahatanLintasBatas }}</td>
                                            <td>{{ $item->Keselamatan }}</td>
                                            <td>{{ $item->Kejadian }}</td>
                                            <td> <a class="btn btn-warning btn-edit"
                                                    href="{{ route('garkamla.edit', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-delete" data-id="{{ $item->id }}">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    @endauth


                </div>
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
@endsection

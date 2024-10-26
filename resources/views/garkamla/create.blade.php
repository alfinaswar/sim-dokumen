@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Tambah Data</h5>
                    <a href="{{ route('garkamla.index') }}" class="btn btn-primary float-end">
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form class="theme-form" method="POST" action="{{ route('garkamla.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="mmsi">Jenis Garkamla</label>
                            <select class="form-control" name="KategoriID">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->NamaKategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="Pelanggaran">Pelanggaran</label>
                            <input class="form-control" type="number" id="Pelanggaran" name="Pelanggaran"
                                placeholder="Pelanggaran">
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="KejahatanLintasBatas">Kejahatan Lintas Batas</label>
                            <input class="form-control" type="number" id="KejahatanLintasBatas" name="KejahatanLintasBatas"
                                placeholder="Kejahatan Lintas Batas">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="Keselamatan">Keselamatan</label>
                            <select name="Keselamatan" class="form-control">
                                <option value="Bocor">Bocor</option>
                                <option value="Hancur">Hancur</option>
                                <option value="Hilang Kontak">Hilang Kontak</option>
                                <option value="Kandas">Kandas</option>
                                <option value="Karam">Karam</option>
                                <option value="Tabrakan">Tabrakan</option>
                                <option value="Tenggelam">Tenggelam</option>
                                <option value="Terbakar">Terbakar</option>
                                <option value="Terbalik">Terbalik</option>
                                <option value="Terdampar">Terdampar</option>
                                <option value="Terapung">Terapung</option>
                                <option value="Meledak">Meledak</option>
                                <option value="Kecelakaan Individu">Kecelakaan Individu</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="Kejadian">Kejadian</label>
                            <input class="form-control" type="number" id="Kejadian" name="Kejadian"
                                placeholder="Kejadian">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                        </div>
                    </form>
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

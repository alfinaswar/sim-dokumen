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
                    <form class="theme-form" method="POST" action="{{ route('garkamla.update', $data->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="mmsi">Jenis Garkamla</label>
                            <select class="form-control" name="KategoriID">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $data->KategoriID) Selected @endif>
                                        {{ $item->NamaKategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="Pelanggaran">Pelanggaran</label>
                            <input class="form-control" type="number" id="Pelanggaran" value="{{ $data->Pelanggaran }}"
                                name="Pelanggaran" placeholder="Pelanggaran">
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="KejahatanLintasBatas">Kejahatan Lintas Batas</label>
                            <input class="form-control" type="number" id="KejahatanLintasBatas"
                                value="{{ $data->KejahatanLintasBatas }}" name="KejahatanLintasBatas"
                                placeholder="Kejahatan Lintas Batas">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label pt-0" for="Keselamatan">Keselamatan</label>
                            <select name="Keselamatan" class="form-control">
                                <option value="Bocor" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Bocor</option>
                                <option value="Hancur" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Hancur</option>
                                <option value="Hilang Kontak" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Hilang Kontak</option>
                                <option value="Kandas" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Kandas</option>
                                <option value="Karam" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Karam</option>
                                <option value="Tabrakan" @if ($data->Keselamatan == 'Bocor') Selected @endif>

                                    Tabrakan</option>
                                <option value="Tenggelam" @if ($data->Keselamatan == 'Bocor') Selected @endif>Tenggelam
                                </option>
                                <option value="Terbakar" @if ($data->Keselamatan == 'Bocor') Selected @endif>Terbakar
                                </option>
                                <option value="Terbalik" @if ($data->Keselamatan == 'Bocor') Selected @endif>Terbalik
                                </option>
                                <option value="Terdampar" @if ($data->Keselamatan == 'Bocor') Selected @endif>Terdampar
                                </option>
                                <option value="Terapung" @if ($data->Keselamatan == 'Bocor') Selected @endif>Terapung
                                </option>
                                <option value="Meledak" @if ($data->Keselamatan == 'Bocor') Selected @endif>Meledak
                                </option>
                                <option value="Kecelakaan Individu" @if ($data->Keselamatan == 'Bocor') Selected @endif>
                                    Kecelakaan Individu</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="col-form-label pt-0" for="Kejadian">Kejadian</label>
                            <input class="form-control" type="number" value="{{ $data->Keselamatan }}" id="Kejadian"
                                name="Kejadian" placeholder="Kejadian">
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

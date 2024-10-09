@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Form Update Kategori</h5>
            </div>
            <div class="card-body">
                <form class="theme-form" action="{{ route('kategori.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="namaKategori">Nama Kategori</label>
                        <input class="form-control" id="namaKategori" name="NamaKategori" type="text" placeholder="Enter Nama Kategori" value="{{ old('namaKategori', $data->NamaKategori) }}">

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <button class="btn btn-secondary" onclick="history.back()" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

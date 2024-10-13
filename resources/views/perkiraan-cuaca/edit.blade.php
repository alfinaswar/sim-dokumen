@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Edit Data Perkiraan Cuaca</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('perkiraan-cuaca.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="theme-form">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="col-form-label pt-0" for="wilayah">Wilayah</label>
            <input class="form-control" type="text" id="wilayah" name="wilayah" placeholder="Wilayah" value="{{ $data->Wilayah }}">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="tanggal_berlaku">Tanggal Berlaku</label>
            <input class="form-control" type="datetime-local" id="tanggal_berlaku" name="tanggal_berlaku" value="{{ date('Y-m-d\TH:i', strtotime($data->TanggalBerlaku)) }}">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="tanggal_berakhir">Tanggal Berakhir</label>
            <input class="form-control" type="datetime-local" id="tanggal_berakhir" name="tanggal_berakhir" value="{{ date('Y-m-d\TH:i', strtotime($data->TanggalBerakhirs)) }}">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="cuaca">Cuaca</label>
            <select class="form-control js-example-basic-single" id="cuaca" name="cuaca">
              <option value="Cerah" {{ $data->Cuaca == 'Cerah' ? 'selected' : '' }}>Cerah</option>
              <option value="Berawan" {{ $data->Cuaca == 'Berawan' ? 'selected' : '' }}>Berawan</option>
              <option value="Hujan Ringan" {{ $data->Cuaca == 'Hujan Ringan' ? 'selected' : '' }}>Hujan Ringan</option>
              <option value="Hujan Lebat" {{ $data->Cuaca == 'Hujan Lebat' ? 'selected' : '' }}>Hujan Lebat</option>
              <option value="Badai" {{ $data->Cuaca == 'Badai' ? 'selected' : '' }}>Badai</option>
            </select>
          </div>
          <div class="row">
            <div class="mb-3 col-6">
              <label class="col-form-label pt-0" for="angin">Angin</label>
              <input class="form-control" type="text" id="angin" name="angin" placeholder="Angin" value="{{ $data->Angin }}">
            </div>
            <div class="mb-3 col-6">
              <label class="col-form-label pt-0" for="arah_angin">Arah Angin</label>
              <input class="form-control" type="text" id="arah_angin" name="arah_angin" placeholder="Arah Angin" value="{{ $data->ArahAngin }}">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-6">
              <label class="col-form-label pt-0" for="gelombang">Gelombang</label>
              <select class="form-control" id="gelombang" name="gelombang">
                <option value="tenang" {{ $data->Gelombang == 'tenang' ? 'selected' : '' }}>Tenang</option>
                <option value="rendah" {{ $data->Gelombang == 'rendah' ? 'selected' : '' }}>Rendah</option>
                <option value="sedang" {{ $data->Gelombang == 'sedang' ? 'selected' : '' }}>Sedang</option>
                <option value="tinggi" {{ $data->Gelombang == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                <option value="sangat-tinggi" {{ $data->Gelombang == 'sangat-tinggi' ? 'selected' : '' }}>Sangat Tinggi</option>
                <option value="ekstrem" {{ $data->Gelombang == 'ekstrem' ? 'selected' : '' }}>Ekstrem</option>
              </select>
            </div>
            <div class="mb-3 col-6">
              <label class="col-form-label pt-0" for="tinggi_gelombang">Tinggi Gelombang</label>
              <select class="form-control" id="tinggi_gelombang" name="tinggi_gelombang">
                <option value="0-0.5" {{ $data->TinggiGelombang == '0-0.5' ? 'selected' : '' }}>0 - 0.5 meter</option>
                <option value="0.5-1" {{ $data->TinggiGelombang == '0.5-1' ? 'selected' : '' }}>0.5 - 1 meter</option>
                <option value="1-1.5" {{ $data->TinggiGelombang == '1-1.5' ? 'selected' : '' }}>1 - 1.5 meter</option>
                <option value="1.5-2" {{ $data->TinggiGelombang == '1.5-2' ? 'selected' : '' }}>1.5 - 2 meter</option>
                <option value="2-2.5" {{ $data->TinggiGelombang == '2-2.5' ? 'selected' : '' }}>2 - 2.5 meter</option>
                <option value="2.5-3" {{ $data->TinggiGelombang == '2.5-3' ? 'selected' : '' }}>2.5 - 3 meter</option>
                <option value="3-3.5" {{ $data->TinggiGelombang == '3-3.5' ? 'selected' : '' }}>3 - 3.5 meter</option>
                <option value="3.5-4" {{ $data->TinggiGelombang == '3.5-4' ? 'selected' : '' }}>3.5 - 4 meter</option>
                <option value="4+" {{ $data->TinggiGelombang == '4+' ? 'selected' : '' }}>Lebih dari 4 meter</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="peringatan">Peringatan</label>
            <input class="form-control" type="text" id="peringatan" name="peringatan" placeholder="Peringatan" value="{{ $data->Peringatan }}">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="gambar">Gambar</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
            @if($data->Gambar)
              <img src="{{ asset('storage/'.$data->gambar) }}" alt="Gambar Perkiraan Cuaca" class="img-thumbnail mt-2" style="width: 150px;">
            @endif
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3">{{ $data->Keterangan }}</textarea>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('perkiraan-cuaca.index') }}" class="btn btn-secondary">Batal</a>
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

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();

    $('form').on('submit', function() {
        var fileInput = $('#gambar')[0];
        if (fileInput.files.length > 0) {
            var file = fileInput.files[0];
            if (file.size > 2 * 1024 * 1024) { // 2 MB
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Ukuran file gambar terlalu besar. Maksimal 2 MB.',
                });
                return false;
            }
        }
    });
});
</script>
@endsection

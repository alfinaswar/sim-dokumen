@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Tambah Data Perkiraan Cuaca</h5>
        <a href="{{route('perkiraan-cuaca.index')}}" class="btn btn-primary float-end" >
                        Kembali
                    </a>
      </div>
      <div class="card-body">
        <form action="{{ route('perkiraan-cuaca.store') }}" method="POST" enctype="multipart/form-data" class="theme-form">
          @csrf
          <div class="mb-3">
            <label class="col-form-label pt-0" for="wilayah">Wilayah</label>
            <input class="form-control" type="text" id="wilayah" name="wilayah" placeholder="Wilayah">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="tanggal_berlaku">Tanggal Berlaku</label>
            <input class="form-control" type="datetime-local" id="date" name="tanggal_berlaku">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="tanggal_berakhir">Tanggal Berakhir</label>
            <input class="form-control" type="datetime-local" id="tanggal_berakhir" name="tanggal_berakhir">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="cuaca">Cuaca</label>
            <select class="form-control js-example-basic-single" id="cuaca" name="cuaca">
              <option value="Cerah">Cerah</option>
              <option value="Berawan">Berawan</option>
              <option value="Hujan Ringan">Hujan Ringan</option>
              <option value="Hujan Lebat">Hujan Lebat</option>
              <option value="Badai">Badai</option>
            </select>
          </div>
         <div class="row">
             <div class="mb-3 col-6">
            <label class="col-form-label pt-0" for="angin">Angin</label>
            <input class="form-control" type="text" id="angin" name="angin" placeholder="Angin">
          </div>
          <div class="mb-3 col-6">
            <label class="col-form-label pt-0" for="arah_angin">Arah Angin</label>
            <input class="form-control" type="text" id="arah_angin" name="arah_angin" placeholder="Arah Angin">
          </div>
         </div>
         <div class="row">
             <div class="mb-3 col-6">
            <label class="col-form-label pt-0" for="gelombang">Gelombang</label>
          <select class="form-control" id="gelombang" name="gelombang">
  <option value="" selected disabled>Pilih kategori ketinggian gelombang</option>
  <option value="tenang">Tenang</option>
  <option value="rendah">Rendah</option>
  <option value="sedang">Sedang</option>
  <option value="tinggi">Tinggi</option>
  <option value="sangat-tinggi">Sangat Tinggi</option>
  <option value="ekstrem">Ekstrem </option>
</select>
          </div>
          <div class="mb-3 col-6">
            <label class="col-form-label pt-0" for="tinggi_gelombang">Tinggi Gelombang</label>
            <select class="form-control" id="gelombang" name="tinggi-gelombang">
  <option value="" selected disabled>Pilih tinggi gelombang</option>
  <option value="0-0.5">0 - 0.5 meter</option>
  <option value="0.5-1">0.5 - 1 meter</option>
  <option value="1-1.5">1 - 1.5 meter</option>
  <option value="1.5-2">1.5 - 2 meter</option>
  <option value="2-2.5">2 - 2.5 meter</option>
  <option value="2.5-3">2.5 - 3 meter</option>
  <option value="3-3.5">3 - 3.5 meter</option>
  <option value="3.5-4">3.5 - 4 meter</option>
  <option value="4+">Lebih dari 4 meter</option>
</select>
          </div>
         </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="peringatan">Peringatan</label>
            <input class="form-control" type="text" id="peringatan" name="peringatan" placeholder="Peringatan">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="gambar">Gambar</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
          </div>
          <div class="mb-3">
            <label class="col-form-label pt-0" for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3"></textarea>
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

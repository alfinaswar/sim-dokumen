@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>Edit Data Situasi Maritim</h5>
      </div>
      <div class="card-body">
       <form id="updateForm" action="{{route('situasi-maritim.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="update-id">
                    <div class="mb-3">
                        <label for="update-kategori" class="form-label">Kategori</label>
                        <select name="Kategori" class="form-control" id="update-kategori">
                            <option>Pilih Kategori</option>
                            @foreach ($kategori as $i)
                                <option value="{{ $i->id }}" {{ $data->Kategori == $i->id ? 'selected' : '' }}>{{ $i->NamaKategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="update-lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="update-lokasi" name="Lokasi" value="{{$data->Lokasi}}" placeholder="Lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-waktu" class="form-label">Waktu</label>
                        <input type="datetime-local" class="form-control" id="update-waktu" value="{{$data->Waktu}}" name="Waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="update-keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="update-keterangan" name="Keterangan" placeholder="Keterangan" value="{{$data->Keterangan}}" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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

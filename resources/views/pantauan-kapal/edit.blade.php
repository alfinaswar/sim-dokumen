@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Tambah Data Pemantauan Kapal</h5>
                <a href="{{route('pantauan-kapal.index')}}" class="btn btn-primary float-end">
                        Kembali
                </a>
            </div>
            <div class="card-body">
                 <form id="updateForm" action="{{route('pantauan-kapal.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Data Pemantauan Kapal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="update_id" name="id">
                    <div class="mb-3">
                        <label class="col-form-label" for="update_mmsi">MMSI</label>
                        <input class="form-control" type="text" id="update_mmsi" value="{{$data->MMSI}}" name="mmsi">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="update_nama_kapal">Nama Kapal</label>
                        <input class="form-control" type="text" id="update_nama_kapal"  value="{{$data->NamaKapal}}" name="nama_kapal">
                    </div>
                    <div class="mb-3">
                    <label class="col-form-label pt-0" for="negara_kapal">Negara Kapal</label>
                         <select class="js-example-basic-single col-sm-12" name="negara_kapal" id="negara_kapal">
                            <option value="{{$data->NegaraKapal}}" selected>{{$data->NegaraKapal}}</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="update_jenis_kapal">Jenis Kapal</label>
                        <input class="form-control" type="text" id="update_jenis_kapal"  value="{{$data->JenisKapal}}" name="jenis_kapal">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="update_gambar">Gambar</label>
                        <input class="form-control" type="file" id="update_gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="update_keterangan">Keterangan</label>
                        <textarea class="form-control" id="update_keterangan" name="keterangan"  value="{{$data->Keterangan}}" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
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
    $(document).ready(function () {
       var countries = [
    "Afganistan", "Albania", "Aljazair", "Andorra", "Angola", "Antigua dan Barbuda", "Argentina", "Armenia", "Australia", "Austria",
    "Azerbaijan", "Bahama", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgia", "Belize", "Benin", "Bhutan", "Bolivia",
    "Bosnia dan Herzegovina", "Botswana", "Brasil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Kamboja",
    "Kamerun", "Kanada", "Republik Afrika Tengah", "Chad", "Chili", "Tiongkok", "Kolombia", "Komoro", "Republik Demokratik Kongo",
    "Republik Kongo", "Kosta Rika", "Kroasia", "Kuba", "Siprus", "Republik Ceko", "Denmark", "Djibouti", "Dominika",
    "Republik Dominika", "Ekuador", "Mesir", "El Salvador", "Guinea Khatulistiwa", "Eritrea", "Estonia", "Eswatini", "Ethiopia",
    "Fiji", "Finlandia", "Perancis", "Gabon", "Gambia", "Georgia", "Jerman", "Ghana", "Yunani", "Grenada", "Guatemala", "Guinea",
    "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hongaria", "Islandia", "India", "Indonesia", "Iran", "Irak", "Irlandia", "Israel",
    "Italia", "Jamaika", "Jepang", "Yordania", "Kazakhstan", "Kenya", "Kiribati", "Korea Utara", "Korea Selatan", "Kosovo", "Kuwait",
    "Kirgistan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lituania", "Luksemburg", "Madagaskar",
    "Malawi", "Malaysia", "Maladewa", "Mali", "Malta", "Kepulauan Marshall", "Mauritania", "Mauritius", "Meksiko", "Mikronesia",
    "Moldova", "Monako", "Mongolia", "Montenegro", "Maroko", "Mozambik", "Myanmar", "Namibia", "Nauru", "Nepal", "Belanda",
    "Selandia Baru", "Nikaragua", "Niger", "Nigeria", "Makedonia Utara", "Norwegia", "Oman", "Pakistan", "Palau", "Panama", "Papua Nugini",
    "Paraguay", "Peru", "Filipina", "Polandia", "Portugal", "Qatar", "Rumania", "Rusia", "Rwanda", "Saint Kitts dan Nevis",
    "Saint Lucia", "Saint Vincent dan Grenadines", "Samoa", "San Marino", "Sao Tome dan Principe", "Arab Saudi", "Senegal",
    "Serbia", "Seychelles", "Sierra Leone", "Singapura", "Slovakia", "Slovenia", "Kepulauan Solomon", "Somalia", "Afrika Selatan",
    "Sudan Selatan", "Spanyol", "Sri Lanka", "Sudan", "Suriname", "Swedia", "Swiss", "Suriah", "Taiwan", "Tajikistan", "Tanzania",
    "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad dan Tobago", "Tunisia", "Turki", "Turkmenistan", "Tuvalu", "Uganda",
    "Ukraina", "Uni Emirat Arab", "Inggris", "Amerika Serikat", "Uruguay", "Uzbekistan", "Vanuatu", "Kota Vatikan",
    "Venezuela", "Vietnam", "Yaman", "Zambia", "Zimbabwe"
];

     var countryOptions = countries.map(function(country) {
        return `<option value="${country}">${country}</option>`;
    }).join('');
    $('#negara_kapal').append(countryOptions).select2();
    });
</script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Garkamla</h5><span></span>

                </div>
                <div class="card-body">
                    <div class="row mb-3">

                        <div class="col-sm-3">
                            <form action="{{ route('garkamla.index') }}">
                                <label>Filter Tahun</label>
                                <select class="form-control" id="tahun" name="tahun">
                                    <option value="">Pilih Tahun</option>
                                    @for ($year = 2020; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                        </div>
                        <div class="col-sm-3 d-flex align-items-end">

                            <button type="submit" class="btn btn-primary ms-2">Cari</button>
                        </div>
                        </form>
                    </div>


                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Jenis Garkamla</th>
                                    <th>Pelanggaran</th>
                                    <th>Kejahatan Lintas Batas</th>
                                    <th>Keselamatan</th>
                                    <th>Kejadian</th>
                                    @if (auth()->check())
                                        @if (auth()->user()->role == 'admin')
                                            <td>Aksi</td>
                                        @else
                                        @endif
                                    @else
                                    @endauth

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
                                    @if (auth()->check())
                                        @if (auth()->user()->role == 'Admin')
                                            <td>
                                                <a class="btn btn-warning btn-edit"
                                                    href="{{ route('garkamla.edit', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-delete"
                                                    data-id="{{ $item->id }}">Hapus</a>
                                            </td>
                                        @else
                                        @endif

                                    @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>



            <div class="card-body p-0 chart-block">
                <div id="ChartDonat" style="width: 100%; height: 400px;"></div>
            </div>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {
        packages: ['corechart']
    });

    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
        if ($("#ChartDonat").length > 0) {
            var data = google.visualization.arrayToDataTable(@json($datajson));
            var options = {
                title: 'Diagram',
                legend: 'none',
                width: '100%',
                height: 400,
                pieSliceText: 'label',
                slices: {
                    4: {
                        offset: 0.2
                    },
                    12: {
                        offset: 0.3
                    },
                    14: {
                        offset: 0.4
                    },
                    15: {
                        offset: 0.5
                    },
                },
                colors: [
                    vihoAdminConfig.primary,
                    vihoAdminConfig.secondary,
                    "#222222",
                    "#717171",
                    "#e2c636",
                    "#d22d3d",
                    "#e6edef"
                ]
            };

            var chart = new google.visualization.PieChart(document.getElementById('ChartDonat'));
            chart.draw(data, options);
        }
    }
</script>
@endsection

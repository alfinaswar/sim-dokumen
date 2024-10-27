@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Garkamla</h5><span></span>
                    @auth
                        @if (auth()->user()->role === 'Admin')
                            <a href="{{ route('garkamla.create') }}" class="btn btn-primary float-end">
                                Tambah Data
                            </a>
                        @endif
                    @endauth
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
                                    @if (auth()->check() && auth()->user()->role == 'Admin')
                                        <th>Aksi</th>
                                    @endif
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
                                        @if (auth()->check() && auth()->user()->role == 'Admin')
                                            <td>
                                                <a class="btn btn-warning btn-edit"
                                                    href="{{ route('garkamla.edit', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-delete"
                                                    data-id="{{ $item->id }}">Hapus</a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Baris baru untuk chart --}}
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body p-0 chart-block">
                    <div id="ChartDonat"></div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body chart-block">
                    <div class="chart-overflow" id="ChartDiagram"></div>
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
            packages: ['corechart', 'bar']
        });

        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawPieChart();
            drawColumnChart();
        }

        function drawPieChart() {
            if (document.getElementById('ChartDonat')) {
                var data = google.visualization.arrayToDataTable(JSON.parse(@json($datajson)));

                var options = {
                    title: '',
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
                        }
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

        function drawColumnChart() {
            if (document.getElementById('ChartDiagram')) {
                var currentYear = new Date().getFullYear();
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Jumlah Pelanggaran', 'Jumlah Kejahatan', 'Jumlah Kejadian'],
                    ...JSON.parse(@json($datajson2)).map(item => [item.year, item.jumlahPelanggaran, item
                        .jumlahKejahatan, item.jumlahKejadian
                    ])
                ]);

                var options = {
                    chart: {
                        title: `Data Keamanan dan Keselamatan Tahun ${currentYear}`,
                        subtitle: 'Data per Tahun'
                    },
                    bars: 'vertical',
                    vAxis: {
                        format: 'decimal'
                    },
                    height: 400,
                    width: '100%',
                    colors: [vihoAdminConfig.primary, vihoAdminConfig.secondary, '#e2c636']
                };

                var chart = new google.charts.Bar(document.getElementById('ChartDiagram'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        }
    </script>
@endsection

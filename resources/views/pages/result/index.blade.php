@extends('layouts.app', ['title' => 'Data Hasil SAW'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Hasil SAW</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('dashboard') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data Hasil SAW</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tabel Penilaian Alternatif</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th width="30%">Nama Rumah Sakit</th>
                                            <th>Kualitas Layananan Medis</th>
                                            <th>Fasilitas Rumah Sakit</th>
                                            <th>Biaya Rumah Sakit</th>
                                            <th>Lokasi Rumah Sakit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alternatives as $list)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $list->hospital->hospital_name }}</td>
                                                <td>{{ $list->quality }}</td>
                                                <td>{{ $list->facilities }}</td>
                                                <td>{{ $list->cost }}</td>
                                                <td>{{ $list->location }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tabel Normalisasi</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th width="30%">Nama Rumah Sakit</th>
                                            <th>Kualitas Layananan Medis</th>
                                            <th>Fasilitas Rumah Sakit</th>
                                            <th>Biaya Rumah Sakit</th>
                                            <th>Lokasi Rumah Sakit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($normalisasi as $list)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $list['hospital_name'] }}</td>
                                                <td>{{ $list['quality'] }}</td>
                                                <td>{{ $list['facilities'] }}</td>
                                                <td>{{ $list['cost'] }}</td>
                                                <td>{{ $list['location'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Proses Penentuan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th width="30%">Nama Rumah Sakit</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proses_penentuan as $list)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $list['hospital_name'] }}</td>
                                                <td>{{ $list['hasil'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Perankingan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5" rowspan="2">No</th>
                                            <th width="30%">Hasil</th>
                                            <th>K1</th>
                                            <th>K2</th>
                                            <th>K3</th>
                                            <th>K4</th>
                                            <th rowspan="2">Hasil</th>
                                            <th rowspan="2">Ranking</th>
                                        </tr>
                                        <tr>
                                            <th width="30%">Bobot</th>
                                            <th>30</th>
                                            <th>40</th>
                                            <th>10</th>
                                            <th>20</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_ranking as $list)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $list['hospital_name'] }}</td>
                                                <td>{{ $list['quality'] }}</td>
                                                <td>{{ $list['facilities'] }}</td>
                                                <td>{{ $list['cost'] }}</td>
                                                <td>{{ $list['location'] }}</td>
                                                <td>{{ $list['hasil'] }}</td>
                                                <td>{{ $loop->iteration }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

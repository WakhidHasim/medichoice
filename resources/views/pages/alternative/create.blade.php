@extends('layouts.app', ['title' => 'Tambah Data Alternatif'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Alternatif</h4>
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
                        <a href="{{ route('alternatives.index') }}">Data Alternatif</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Data Alternatif</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('alternatives.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="hospital_id">Nama Rumah Sakit</label>
                            <select class="form-control cb @error('hospital_id') is-invalid @enderror" id="hospital_id"
                                name="hospital_id">
                                <option disabled selected>Pilih Rumah Sakit</option>
                                @foreach ($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->hospital_name }}</option>
                                @endforeach
                            </select>
                            @error('hospital_id')
                                <small id="criteriaIdHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quality">Kualitas Layananan Medis</label>
                            <select class="form-control cb @error('quality') is-invalid @enderror" id="quality"
                                name="quality">
                                <option disabled selected>Pilih Kualitas Layananan Medis</option>
                                <option value="5">Sangat Baik (5)</option>
                                <option value="4">Baik (4)</option>
                                <option value="3">Sedang (3)</option>
                                <option value="2">Buruk (2)</option>
                                <option value="1">Sangat Buruk (1)</option>
                            </select>
                            @error('quality')
                                <small id="qualityHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facilities">Fasilitas Rumah Sakit</label>
                            <select class="form-control cb @error('facilities') is-invalid @enderror" id="facilities"
                                name="facilities">
                                <option disabled selected>Pilih Fasilitas Rumah Sakit</option>
                                <option value="5">Sangat Lengkap (5)</option>
                                <option value="4">Lengkap (4)</option>
                                <option value="3">Cukup (3)</option>
                                <option value="2">Kurang (2)</option>
                                <option value="1">Kurang Lengkap (1)</option>
                            </select>
                            @error('facilities')
                                <small id="facilitiesHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cost">Biaya Rumah Sakit</label>
                            <select class="form-control cb @error('cost') is-invalid @enderror" id="cost"
                                name="cost">
                                <option disabled selected>Pilih Biaya Rumah Sakit</option>
                                <option value="5">Sangat Murah (5)</option>
                                <option value="4">Murah (4)</option>
                                <option value="3">Sedang (3)</option>
                                <option value="2">Mahal (2)</option>
                                <option value="1">Sangat Mahal (1)</option>
                            </select>
                            @error('cost')
                                <small id="costHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi Rumah Sakit</label>
                            <select class="form-control cb @error('location') is-invalid @enderror" id="location"
                                name="location">
                                <option disabled selected>Pilih Lokasi Rumah Sakit</option>
                                <option value="5">Sangat Jauh (5)</option>
                                <option value="4">Jauh (4)</option>
                                <option value="3">Sedang (3)</option>
                                <option value="2">Dekat (2)</option>
                                <option value="1">Sangat Dekat (1)</option>
                            </select>
                            @error('location')
                                <small id="locationHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

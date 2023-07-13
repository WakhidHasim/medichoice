@extends('layouts.app', ['title' => 'Edit Data Alternatif'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Data Alternatif</h4>
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
                        <a href="#">Edit Data Alternatif</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('alternatives.update', $alternative->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="hospital_id">Nama Rumah Sakit</label>
                            <select class="form-control cb @error('hospital_id') is-invalid @enderror" id="hospital_id"
                                name="hospital_id">
                                <option disable selected>Pilih Nama Kriteria</option>
                                @foreach ($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}"
                                        {{ $alternative->hospital_id == $hospital->id ? 'selected' : null }}>
                                        {{ $hospital->hospital_name }}</option>
                                @endforeach
                            </select>
                            @error('hospital_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quality">Kualitas Layananan Medis</label>
                            <select class="form-control cb @error('quality') is-invalid @enderror" id="quality"
                                name="quality">
                                <option disabled selected>Pilih Kualitas Layananan Medis</option>
                                <option value="5" {{ $alternative->quality == 5 ? 'selected' : '' }}>Sangat Baik
                                    (5)
                                </option>
                                <option value="4" {{ $alternative->quality == 4 ? 'selected' : '' }}>Baik (4)</option>
                                <option value="3" {{ $alternative->quality == 3 ? 'selected' : '' }}>Sedang (3)
                                </option>
                                <option value="2" {{ $alternative->quality == 2 ? 'selected' : '' }}>Buruk (2)
                                </option>
                                <option value="1" {{ $alternative->quality == 1 ? 'selected' : '' }}>Sangat Buruk (1)
                                </option>
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
                                <option value="5" {{ $alternative->facilities == 5 ? 'selected' : '' }}>Sangat
                                    Lengkap
                                    (5)</option>
                                <option value="4" {{ $alternative->facilities == 4 ? 'selected' : '' }}>Lengkap (4)
                                </option>
                                <option value="3" {{ $alternative->facilities == 3 ? 'selected' : '' }}>Cukup (3)
                                </option>
                                <option value="2" {{ $alternative->facilities == 2 ? 'selected' : '' }}>Kurang (2)
                                </option>
                                <option value="1" {{ $alternative->facilities == 1 ? 'selected' : '' }}>Kurang
                                    Lengkap
                                    (1)</option>
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
                                <option value="5" {{ $alternative->cost == 5 ? 'selected' : '' }}>Sangat Murah (5)
                                </option>
                                <option value="4" {{ $alternative->cost == 4 ? 'selected' : '' }}>Murah (4)</option>
                                <option value="3" {{ $alternative->cost == 3 ? 'selected' : '' }}>Sedang (3)</option>
                                <option value="2" {{ $alternative->cost == 2 ? 'selected' : '' }}>Mahal (2)</option>
                                <option value="1" {{ $alternative->cost == 1 ? 'selected' : '' }}>Sangat Mahal (1)
                                </option>
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
                                <option value="5" {{ $alternative->location == 5 ? 'selected' : '' }}>Sangat Jauh (5)
                                </option>
                                <option value="4" {{ $alternative->location == 4 ? 'selected' : '' }}>Jauh (4)
                                </option>
                                <option value="3" {{ $alternative->location == 3 ? 'selected' : '' }}>Sedang (3)
                                </option>
                                <option value="2" {{ $alternative->location == 2 ? 'selected' : '' }}>Dekat (2)
                                </option>
                                <option value="1" {{ $alternative->location == 1 ? 'selected' : '' }}>Sangat Dekat
                                    (1)</option>
                            </select>
                            @error('location')
                                <small id="locationHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title' => 'Tambah Data Kriteria'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Kriteria</h4>
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
                        <a href="{{ route('criterias.index') }}">Data Kriteria</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Data Kriteria</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('criterias.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="criteria_name">Nama Kriteria</label>
                            <input type="text" class="form-control  @error('criteria_name') is-invalid @enderror"
                                id="criteria_name" aria-describedby="criteriaNameHelp" name="criteria_name"
                                value="{{ old('criteria_name') }}" autofocus>
                            @error('criteria_name')
                                <small id="criteriaNameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="weight">Bobot Kriteria</label>
                            <input type="number" step="0.01" class="form-control  @error('weight') is-invalid @enderror"
                                id="weight" aria-describedby="weightHelp" name="weight" value="{{ old('weight') }}"
                                autofocus>
                            @error('weight')
                                <small id="weightHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Tipe Kriteria</label>
                            <select class="form-control cb @error('type') is-invalid @enderror" id="type"
                                name="type">
                                <option disabled selected>Pilih Tipe Kriteria</option>
                                <option value="Cost">Cost</option>
                                <option value="Benefit">Benefit</option>
                            </select>
                            @error('type')
                                <small id="typeHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

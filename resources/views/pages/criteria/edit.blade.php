@extends('layouts.app', ['title' => 'Edit Data Kriteria'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Data Kriteria</h4>
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
                        <a href="#">Edit Data Kriteria</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('criterias.update', $criteria->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="criteria_name">Nama Kriteria</label>
                            <input type="text" class="form-control @error('criteria_name') is-invalid @enderror"
                                id="criteria_name" name="criteria_name"
                                value="{{ old('criteria_name', $criteria->criteria_name) }}" autofocus>
                            @error('criteria_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="weight">Bobot Kriteria</label>
                            <input type="number" step="0.01" class="form-control @error('weight') is-invalid @enderror"
                                id="weight" name="weight" value="{{ old('weight', $criteria->weight) }}">
                            @error('weight')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Tipe Kriteria</label>
                            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                                <option disabled selected>Pilih Tipe Kriteria</option>
                                <option value="Cost" {{ $criteria->type === 'Cost' ? 'selected' : '' }}>Cost</option>
                                <option value="Benefit" {{ $criteria->type === 'Benefit' ? 'selected' : '' }}>Benefit
                                </option>
                            </select>
                            @error('type')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

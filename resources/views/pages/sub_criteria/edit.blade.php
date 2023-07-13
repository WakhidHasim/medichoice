@extends('layouts.app', ['title' => 'Edit Data Sub Kriteria'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Data Sub Kriteria</h4>
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
                        <a href="{{ route('sub_criterias.index') }}">Data Sub Kriteria</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Data Sub Kriteria</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('sub_criterias.update', $sub_criteria->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="criteria_id">Nama Kriteria</label>
                            <select class="form-control cb @error('criteria_id') is-invalid @enderror" id="criteria_id"
                                name="criteria_id">
                                <option disable selected>Pilih Nama Kriteria</option>
                                @foreach ($criterias as $criteria)
                                    <option value="{{ $criteria->id }}"
                                        {{ $sub_criteria->criteria_id == $criteria->id ? 'selected' : null }}>
                                        {{ $criteria->criteria_name }}</option>
                                @endforeach
                            </select>
                            @error('criteria_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sub_criteria">Sub Kriteria</label>
                            <input type="text" class="form-control  @error('sub_criteria') is-invalid @enderror"
                                id="sub_criteria" aria-describedby="subCritriaHelp" name="sub_criteria"
                                value="{{ old('sub_criteria', $sub_criteria->sub_criteria) }}" autofocus>
                            @error('sub_criteria')
                                <small id="subCritriaHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="parameter">Parameter</label>
                            <input type="text" class="form-control  @error('parameter') is-invalid @enderror"
                                id="parameter" aria-describedby="parameterHelp" name="parameter"
                                value="{{ old('parameter', $sub_criteria->parameter) }}" autofocus>
                            @error('parameter')
                                <small id="parameterHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="value">Nilai</label>
                            <input type="number" step="0.01" class="form-control  @error('value') is-invalid @enderror"
                                id="value" aria-describedby="valueHelp" name="value"
                                value="{{ old('value', $sub_criteria->value) }}" autofocus>
                            @error('value')
                                <small id="valueHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

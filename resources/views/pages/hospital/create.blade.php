@extends('layouts.app', ['title' => 'Tambah Data Rumah Sakit'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Rumah Sakit</h4>
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
                        <a href="{{ route('hospitals.index') }}">Data Rumah Sakit</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Data Rumah Sakit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('hospitals.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="hospital_name">Nama Rumah Sakit</label>
                            <input type="text" class="form-control  @error('hospital_name') is-invalid @enderror"
                                id="hospital_name" aria-describedby="hospitalNameHelp" name="hospital_name"
                                value="{{ old('hospital_name') }}" autofocus>
                            @error('hospital_name')
                                <small id="hospitalNameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Rumah Sakit</label>
                            <textarea name="address" class="form-control" rows="4" cols="50">{{ old('address') }}</textarea>
                            @error('address')
                                <small id="addressHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

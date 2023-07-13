@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Beranda</h4>
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
                        <a href="{{ route('dashboard') }}">Beranda</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Kriteria</p>
                                        <h4 class="card-title">{{ $criterias }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Sub Kriteria</p>
                                        <h4 class="card-title">{{ $sub_criterias }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Alternatif</p>
                                        <h4 class="card-title">{{ $alternatives }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Rumah Sakit</p>
                                        <h4 class="card-title">{{ $hospitals }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

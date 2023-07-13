<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level"> {{ auth()->user()->email }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('hospitals*') ? 'active' : '' }}">
                    <a href="{{ route('hospitals.index') }}">
                        <i class="fas fa-hospital"></i>
                        <p>Rumah Sakit</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('criterias*') ? 'active' : '' }}">
                    <a href="{{ route('criterias.index') }}">
                        <i class="fas fa-list-ol"></i>
                        <p>Kriteria</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('sub_criterias*') ? 'active' : '' }}">
                    <a href="{{ route('sub_criterias.index') }}">
                        <i class="fas fa-list-ul"></i>
                        <p>Sub Kriteria</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('alternatives*') ? 'active' : '' }}">
                    <a href="{{ route('alternatives.index') }}">
                        <i class="fas fa-chart-bar"></i>
                        <p>Alternatif</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('result') ? 'active' : '' }}">
                    <a href="{{ route('result.index') }}">
                        <i class="fas fa-book"></i>
                        <p>Hasil</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->

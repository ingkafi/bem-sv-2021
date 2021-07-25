@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Halo,
                    Bro
                </h1>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard Admin</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Kelola-->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola</h3>
                </div>
            </div>
        </div> <br>

        <div class="card-group">
            <div class="card border-right">
                <a href="/admin/kelola/tampilan">
                    <div class="card-body">
                        <div class="text-success" style="text-align:center;"><i style="width: 70px;
                                                                                                                                                                                                                                                                                                                                                                            height: 70px;" data-feather="monitor"></i>
                            <div class="d-inline-flex align-items-center">
                                <span class="bg-success badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none">Tampilan
                                    Web</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/admin/kelola/info">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $info }}</h1>
                                    <span class="bg-success badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none">Informasi</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span class="text-success"><i data-feather="info"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" card border-right">
                <a href="/admin/kelola/user">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $user }}</h1>
                                    <span class="bg-success badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">User</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span class="text-success"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <br>
        <hr>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">BEM SV</h3>
                </div>
            </div>
        </div> <br>

        <div class="card-group">
            <div class="card border-right">
                <a href="/admin/bem/program">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $proker }}</h1>
                                    <span class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none" style="background-color: #4fc1e9">Program Kerja</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span style="color: #4fc1e9"><i data-feather="award"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/admin/bem/struktur">
                    <div class="card-body">
                        <div style="color: #4fc1e9; text-align:center;"><i style="width: 70px;height: 70px;" data-feather="users"></i>
                            <div class="d-inline-flex align-items-center">
                                <span class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none" style="background-color: #4fc1e9">Struktur</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/admin/bem/aspirasi">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">{{ $aspirasi }}</h1>
                                    <span class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none" style="background-color: #4fc1e9">Aspirasi</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #4fc1e9"><i data-feather="smile"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <br>
        <hr>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Biro Statistik</h3>
                </div>
            </div>
        </div> <br>

        <div class="card-group">
            <div class="card border-right">
                <a href="/admin/statistik/buletin">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">6</h1>
                                    <span class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none" style="background-color: #d5a3e7">Buletin</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span style="color: #d5a3e7"><i data-feather="grid"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/admin/statistik/survei">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">6</h1>
                                    <span class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none" style="background-color: #d5a3e7">Survey</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span style="color: #d5a3e7"><i data-feather="check-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/admin/statistik/database">
                    <div class="card-body">
                        <div style="color: #d5a3e7; text-align:center;"><i style="width: 70px;height: 70px;" data-feather="database"></i>
                            <div class="d-inline-flex align-items-center">
                                <span class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none" style="background-color: #d5a3e7">Database</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <br>
    </div>
    @endsection
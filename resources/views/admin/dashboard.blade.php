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
                <a href="/kelola/parent">
                    <div class="card-body">
                         <div style="color: #48cfad; text-align:center;"><i style="width: 70px;
                            height: 70px;" data-feather="monitor"></i> <div class="d-inline-flex align-items-center">
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color: #48cfad">Tampilan Web</span>
                                </div></div>
                </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/kelola/siswa">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color: #4fc1e9">Informasi</span>
                                </div>
                                                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span style="color: #4fc1e9"><i data-feather="info"></i></span>
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
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #ac92ec">User</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #ac92ec"><i data-feather="users"></i></span>
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
                <a href="/kelola/siswa">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none"
                                        style="background-color: #4fc1e9">Informasi</span>
                                </div>
                                                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size:20px">
                                    Lihat Data</h6>

                            </div>
                            <div class="ml-auto">
                                <span style="color: #4fc1e9"><i data-feather="info"></i></span>
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
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #ac92ec">User</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #ac92ec"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card border-right">
                <a href="/kelola/parent">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span
                                        class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #48cfad">Program Kerja</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate"
                                    style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #48cfad"><i data-feather="award"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" card border-right">
                <a href="/kelola/informasi">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h1 class="text-dark font-weight-medium">123</h1>
                                    <span class="badge font-18 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"
                                        style="background-color: #5d9cec">Aspirasi</span>
                                </div>
                                <h6 class=" text-muted font-weight-normal mb-0 w-100 text-truncate" style="font-size:20px">
                                    Lihat Data</h6>
                            </div>
                            <div class="ml-auto">
                                <span style="color: #5d9cec"><i data-feather="smile"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
<br>
</div>
<footer class="footer text-center text-muted">
    Made With Love From <b>Saraf Design</b>
</footer>
@endsection
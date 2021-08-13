@extends('layouts.app')

@section('content')
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">BEM SV</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">Struktur
                                        Organisasi</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid">
            @foreach (App\Models\Kabinet::get() as $kab)
                <div class="card-group">
                    <div class="card border-right">
                        <a href="/admin/bem/struktur/{{ $kab->tahun }}">
                            <div class="card-body">
                                <div class="text-success" style="text-align:center;"><i
                                        style="width: 70px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                        height: 70px;"
                                        data-feather="users"></i>
                                    <div class="d-inline-flex align-items-center">
                                        <span
                                            class="bg-success badge font-18 text-white font-weight-medium badge-pill ml-2  d-lg-block d-md-none">{{ $kab->nama }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

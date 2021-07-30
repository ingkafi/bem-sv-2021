@extends('layouts.app')


@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Biro Statistik</h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/kelola/informasi" class="text-muted">Data Excel</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Tambah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="container-fluid">
        <form action="/admin/statistik/database/store" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h4 class="card-title">Judul</h4>
                        <div class="form-group">
                            <input type="text" name="judul" id="judul" class="form-control">
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Link Excel</h4>
                        <div class="form-group">
                            <input class="form-control" type="text" name="link" id="link">
                            @error('link')
                            <div class=" alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div style="float: right">
                            <button type="submit" id="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                            <a href="/admin/statistik/database" class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
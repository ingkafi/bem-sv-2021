@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">User</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid">
            <form action="/admin/kelola/user/create" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row">
                    <div class="card" style="width: 100%">
                        <div class="card-body">
                            <h4 class="card-title">Nama</h4>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control"
                                    style="text-transform:uppercase">
                                @error('name')
                                    <div class="alert alert-danger">NAMA tidak boleh kosong.</div>
                                @enderror
                            </div>


                            <h4 class="card-title">Email</h4>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="nama@bemsv2021.com">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <br>
                            <div style="float: right">
                                <button type="submit" id="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                <a href="/admin/kelola/user"
                                    class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

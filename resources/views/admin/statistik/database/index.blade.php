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
                                <li class="breadcrumb-item"><a class="text-muted">Database</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <input type="hidden" name="id" value="1">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Prgram Studi</h4>

                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="" value="" class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Mahasiswa</h4>

                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="" value="" class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Dosen</h4>
                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="" value="" class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Himpunan</h4>
                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="" value="" class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">UKM</h4>
                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="" value="" class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="text-center">
                            <button type="submit" id="submit"
                                class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                            <a href="/admin/dashboard" class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Excel <a href="/admin/statistik/buletin/create"> <button
                                            type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah
                                            Data Excel</button> </a></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0 table-hover" id="myTable">
                                    <thead class="text-white" style="background-color: #3f4c77">
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Judul Data
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal Dipublish
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-dark mb-0 font-16 font-weight-medium">
                                                Data Excel
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-success">Download</button>
                                                </a>
                                                <a href="/admin/statistik/excel/id/edit">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                                </a>
                                                <button type="button" data-toggle="modal" data-target="#danger-header-modal"
                                                    data-item="id"
                                                    class="btn waves-effect waves-light btn-rounded btn-outline-danger delete">Hapus</button>
                                            </td>
                                            <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="danger-header-modalLabel" aria-hidden="true"
                                                style="text-align: center">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-danger">
                                                            <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="mt-0">Data excel akan terhapus
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="/admin/statistik/excel/id/delete" id="lineitem">
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </a>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <script>
                                                $(document).on("click", ".delete", function() {
                                                    var id = $(this).attr('data-item');
                                                    $("#lineitem").attr("href",
                                                        "/admin/statistik/excel/" + id + "/delete")
                                                });
                                            </script>
                                        </tr>
                                    </tbody>

                                </table>
                                <script>
                                    $(document).ready(function() {
                                        $('#myTable').DataTable();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelola
                    </h1>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item">
                                <li>Tampilan Web </li>
                            </ol>
                        </nav>
                    </div>
                    <hr>
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
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Buletin <a href="/admin/statistik/buletin/create"> <button
                                            type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah
                                            Buletin</button> </a></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0 table-hover" id="myTable">
                                    <thead class="text-white" style="background-color: #3f4c77">
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Judul
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Penulis
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal Dibuat
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal Diupdate
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal Dipublish
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Status
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-dark mb-0 font-16 font-weight-medium">
                                                Berita Kehilangan
                                            </td>
                                            <td>
                                                Sugeng
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td class=" font-weight-medium text-success">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-success">
                                                    Data Sudah
                                                    Selesai Diproses</button>
                                            </td>
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-success"
                                                        title="Publish"><i data-feather="check"
                                                            class="feather-icon"></i></button>
                                                </a>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-warning"
                                                        title="Visible"><i data-feather="eye"
                                                            class="feather-icon"></i></button>
                                                </a>
                                                <a href="/admin/statistik/buletin/edit">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-info"
                                                        title="Edit"><i data-feather="edit"
                                                            class="feather-icon"></i></button>
                                                </a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-dark mb-0 font-16 font-weight-medium">
                                                Berita Kehilangan
                                            </td>
                                            <td>
                                                Sugeng
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td>
                                                20 September 2021
                                            </td>
                                            <td class=" font-weight-medium text-success">
                                                <button type="button"
                                                    class="btn waves-effect waves-light btn-sm btn-rounded btn-danger">
                                                    Data Masih Diproses</button>
                                            </td>
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-success"
                                                        title="Publish"><i data-feather="check"
                                                            class="feather-icon"></i></button>
                                                </a>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-warning"
                                                        title="Hidden"><i data-feather="eye-off"
                                                            class="feather-icon"></i></button>
                                                </a>

                                                <a href="">
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#danger-header-modal" data-item=""
                                                        class="btn waves-effect waves-light btn-rounded btn-danger delete"
                                                        title="Delete"><i data-feather="x"
                                                            class="feather-icon"></i></button>
                                                </a>
                                                <a href="/admin/statistik/buletin/edit">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-rounded btn-info"
                                                        title="Edit"><i data-feather="edit"
                                                            class="feather-icon"></i></button>
                                                </a>

                                            </td>

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
            <div class="text-center">
                <button type="submit" id="submit"
                    class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                <a href="/admin/dashboard" class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });
        });
    </script>
    </div>
@endsection

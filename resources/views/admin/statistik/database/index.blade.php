@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Biro Statistik<a
                            href="/statdiary/database">
                            <button type="button"
                                class="btn waves-effect btn-sm waves-light btn-rounded btn-outline-info">Lihat
                                Halaman</button> </a></h2>
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
                        <form action="/admin/statistik/database/updatedba" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Program Studi</h4>
                                <div class="form-group">
                                    <input type="text" name="prodi" id="prodi" value="{{ $database_angkas->prodi }} "
                                        class="form-control">
                                    @error('prodi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Mahasiswa</h4>

                            <div class="form-group">
                                <input type="text" name="mahasiswa" id="mahasiswa" placeholder=""
                                    value="{{ $database_angkas->mahasiswa }}" class="form-control">
                                @error('mahasiswa')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Dosen</h4>
                            <div class="form-group">
                                <input type="text" name="dosen" id="dosen" placeholder=""
                                    value="{{ $database_angkas->dosen }}" class="form-control">
                                @error('dosen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">Himpunan</h4>
                            <div class="form-group">
                                <input type="text" name="himpunan" id="himpunan" placeholder=""
                                    value="{{ $database_angkas->himpunan }}" class="form-control">
                                @error('himpunan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="card-body">
                            <h4 class="card-title">UKM</h4>
                            <div class="form-group">
                                <input type="text" name="ukm" id="ukm" placeholder="" value="{{ $database_angkas->ukm }}"
                                    class="form-control">
                                @error('ukm')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="text-center">
                            <button type="submit" id="submit"
                                class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Excel <a href="/admin/statistik/database/create"> <button
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
                                        @foreach ($databases as $databases)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-dark mb-0 font-16 font-weight-medium">
                                                    {{ $databases->judul }}
                                                </td>
                                                <td>
                                                    {{ $databases->created_at }}
                                                </td>
                                                <td>
                                                    <a href="">
                                                        <!-- <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success">Download</button> -->
                                                    </a>
                                                    <a href="/admin/statistik/database/{{ $databases->id }}/edit">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                                    </a>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#danger-header-modal"
                                                        data-item="{{ $databases->id }}"
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
                                                                    aria-hidden="true">??</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Data excel akan terhapus
                                                                </h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="/admin/statistik/database/{{ $databases->id }}/delete"
                                                                    id="lineitem">
                                                                    <button type="button"
                                                                        class="btn btn-danger">Hapus</button>
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
                                                            "/admin/statistik/database/ " + id + "/delete")
                                                    });
                                                </script>
                                            </tr>
                                        @endforeach
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

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel Struktur Organisasi <a href="/admin/bem/struktur/create">
                                        <button type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah
                                            Struktur</button> </a></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0" id="myTable">
                                    <thead class="text-white" style="background-color: #3f4c77">
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Gambar
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Bidang
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($strukturs as $strukturs)
                                                <td>{{ $loop->iteration }}</td>
                                                <th><img style="width: 70px; height:70px ;object-fit: cover;"
                                                        src="{{ asset('uploads/struktur/' . $strukturs->gambar) }}"
                                                        class="img-fluid rounded-circle">
                                                </th>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $strukturs->bidang }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/bem/struktur/{{ $strukturs->id }}/edit">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                                    </a>
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#danger-header-modal" data-item=""
                                                        class="btn waves-effect waves-light btn-rounded btn-outline-danger delete">Hapus</button>
                                                </td>
                                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-danger">
                                                                <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                </h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Struktur akan terhapus
                                                                </h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="/admin/bem/struktur/{{ $strukturs->id }}/delete"
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
                                                            "/admin/bem/struktur/{{ $strukturs->id }}/delete")
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

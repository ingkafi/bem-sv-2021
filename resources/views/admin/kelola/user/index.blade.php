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
                                <li class="breadcrumb-item"> User
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="card-title">Tabel User <a href="/admin/kelola/user/create"> <button type="button"
                                            class="btn waves-effect btn-sm waves-light btn-rounded btn-success">Tambah Data
                                            User</button> </a></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0 table-hover" id="myTable">
                                    <thead class="text-white" style="background-color: #3f4c77">
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal Bergabung
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($users as $row)
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <div class="mr-3"><img id="myImg"
                                                        src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                        alt="{{ $row->nama }}" class="rounded-circle" width="45"
                                        height="45" />
                        </div> --}}
                                                <td class="">
                                                    <div class=" d-flex align-items-center">
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                {{ $row->name }}
                                                            </h5>
                                                            <span class="text-muted font-14">{{ $row->email }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php
                                                $monthNum = date('m', strtotime($row->created_at));
                                                $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                $monthName = $dateObj->format('F');
                                                ?>
                                                <td>{{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                                    {{ date('Y', strtotime($row->created_at)) }}
                                                </td>
                                                @if ($row->id == '1' || $row->id == '2')
                                                    <td></td>
                                                    <td></td>
                                                @else
                                                    <td class="font-weight-medium text-muted">
                                                        <!-- <a href="/admin/kelola/user/{{ $row->id }}/edit">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-primary">Edit</button>
                                </a> -->
                                                        <a>
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#danger-header-modal-2"
                                                                data-item="{{ $row->id }}"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-danger reset">Reset
                                                                Password</button>
                                                        </a>
                                                        <div id="danger-header-modal-2" class="modal fade" tabindex="-1"
                                                            role="dialog" aria-labelledby="danger-header-modalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div
                                                                        class="modal-header modal-colored-header bg-danger">
                                                                        <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="mt-0">Reset password user
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/admin/kelola/user/{{ $row->id }}/reset"
                                                                            id="reset">
                                                                            <button type="button"
                                                                                class="btn btn-danger">Reset
                                                                                Password</button>
                                                                        </a>
                                                                        <button type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Batal</button>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                        <script>
                                                            $(document).on("click", ".reset", function() {
                                                                var id = $(this).attr('data-item');
                                                                $("#reset").attr("href",
                                                                    "/admin/kelola/user/" + id + "/reset")
                                                            });
                                                        </script>

                                                        <a>
                                                            <button type="button" data-toggle="modal"
                                                                data-target="#danger-header-modal"
                                                                data-item="{{ $row->id }}"
                                                                class="btn waves-effect waves-light btn-rounded btn-outline-danger delete">Hapus</button>
                                                        </a>
                                                        <div id="danger-header-modal" class="modal fade" tabindex="-1"
                                                            role="dialog" aria-labelledby="danger-header-modalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div
                                                                        class="modal-header modal-colored-header bg-danger">
                                                                        <h4 id="danger-header-modalLabel">Apakah Anda Yakin?
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="mt-0">Data user akan terhapus
                                                                        </h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/admin/kelola/user/{{ $row->id }}/delete"
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
                                                                    "/admin/kelola/user/" + id + "/delete")
                                                            });
                                                        </script>

                                                    </td>
                                                @endif
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

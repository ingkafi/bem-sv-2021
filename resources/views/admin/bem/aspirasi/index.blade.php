@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">BEM SV
                    </h1>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item">Aspirasi
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
                                <h3 class="card-title">Tabel Aspirasi </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0" id="myTable">
                                    <thead class="text-white" style="background-color: #3f4c77">
                                        <tr class="border-0">
                                            <th class="border-0 font-14 font-weight-medium">No.
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Nama
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Pesan
                                            </th>
                                            <th class="border-0 font-14 font-weight-medium">Tanggal
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            {{-- <div class="mr-3"><img id="myImg"
                                                src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                                alt="{{ $row->nama }}" class="rounded-circle" width="45"
                                                height="45" />
                                            </div> --}}
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                            nama
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-weight-medium">
                                                Pesan

                                            </td>
                                            <td>1 Januari 2021</td>

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

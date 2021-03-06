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
                            @if ($emailaspirasi->status == '1')
                            <h3 style="padding-right: 1%; padding-top: 1%;">Sembunyikan Formulir Email</h3>
                            <td>
                                <a href="/admin/bem/aspirasi/hide">
                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning" title="Visible"><i data-feather="eye" class="feather-icon"></i></button>
                            </td>
                            @elseif ($emailaspirasi->status == '0')
                            <h3 style="padding-right: 1%; padding-top: 1%;">Tampilkan Formulir Email</h3>
                            <td>
                                <a href="/admin/bem/aspirasi/show">
                                    <button type="button" class="btn  waves-effect waves-light btn-rounded btn-outline-warning" title="Visible"><i data-feather="eye-off" class="feather-icon"></i></button>
                                </a>
                            </td>
                            @endif
                        </div>
                        <hr>
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
                                        <th class="border-0 font-14 font-weight-medium">email
                                        </th>
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium">Pesan
                                        <th class="border-0 font-14 font-weight-medium">Tanggal
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aspirasi as $row)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <div class="mr-3"><img id="myImg"
                                                src="{{ asset('uploads/foto_siswa/' . $file) }}"
                                        alt="{{ $row->nama }}" class="rounded-circle" width="45"
                                        height="45" />
                        </div> --}}
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                        {{ $row->nama }}
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $row->email }}
                        </td>
                        <td>
                            {{ $row->isi }}
                        </td>
                        <?php
                        $monthNum = date('m', strtotime($row->created_at));
                        $dateObj = DateTime::createFromFormat('!m', $monthNum);
                        $monthName = $dateObj->format('F');
                        ?>
                        <td>{{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                            {{ date('Y', strtotime($row->created_at)) }}
                        </td>
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
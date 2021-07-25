@extends('layouts.app')


@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">BEM SV</h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="/kelola/informasi" class="text-muted">Program Kerja</a>
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
        <form action="/admin/bem/program/store" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h4 class="card-title">Program Kerja</h4>
                        <div class="form-group">
                            <input type="text" name="proker" id="proker" class="form-control">
                            @error('program')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Keterangan Program Kerja</h4>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="keterangan" id="keterangan"></textarea>
                            @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Bidang</h4>
                        <div class="form-group">
                            <select class="form-control" id="bidang" name="bidang">
                                <option selected disabled>Pilih Bidang</option>
                                <option value="Biro Statistik">Biro Statistik</option>
                                <option value="Biro Media Informasi">Biro Media Informasi</option>
                                <option value="Biro Administratif">Biro Administratif</option>
                                <option value="K&PSDM">K&PSDM</option>
                                <option value="Harmonisasi Kampus">Harmonisasi Kampus</option>
                                <option value="Kesejahteraan Mahasiswa">Kesejahteraan Mahasiswa</option>
                                <option value="Minat dan Bakat">Minat dan Bakat</option>
                                <option value="Riset dan Keilmuan">Riset dan Keilmuan</option>
                                <option value="Ekonomi Kreatif">Ekonomi Kreatif</option>
                                <option value="Sosial Masyarakat">Sosial Masyarakat</option>
                                <option value="Sosial Politik">Sosial Politik</option>
                                <option value="Hubungan Masyarakat">Hubungan Masyarakat</option>
                            </select>
                            @error('bidang')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Upload Gambar</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="gambar" required autofocus>
                            @error('gambar.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <img id='img-upload' style="width: 600px" /> <br>
                        <div style="float: right">
                            <button type="submit" id="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                            <a href="/admin/bem/program" class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
@endsection
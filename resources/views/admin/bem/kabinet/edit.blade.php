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
                                <li class="breadcrumb-item"><a href="/bem/struktur" class="text-muted">Kabinet</a>
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
            <div class="row">
                <div class="card" style="width: 100%">
                    <br><br>
                    <div class="d-flex align-items-center">
                        <div class="" style="display: block;margin: auto;"><img id=" myImg" style="object-fit: cover;"
                                src="{{ asset('uploads/kabinet/' . $kabinet->gambar) }}" alt="{{ $kabinet->nama }}"
                                width="300" height="auto" />
                        </div>
                    </div>
                    <br><br>
                    <form action="/admin/bem/kabinet/{{ $kabinet->id }}/update" method="post"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h4 class="card-title">Nama Kabinet</h4>
                                    <div class="form-group">
                                        <input type="text" name="nama" id="nama" value="{{ $kabinet->nama }} "
                                            class="form-control">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="card-body">
                                    <h4 class="card-title">Tahun</h4>

                                    <div class="form-group">
                                        <input type="number" name="tahun" id="tahun" placeholder=""
                                            value="{{ $kabinet->tahun }}" class="form-control">
                                        @error('tahun')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Gambar</h4>
                                    <fieldset class="form-group">
                                        <input type="file" class="form-control-file" id="imgInp" name="file">
                                        @error('file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </fieldset>
                                    <img id='img-upload' style="width: 600px" /> <br>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" id="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                <a href="/admin/bem/kabinet"
                                    class="btn waves-effect waves-light btn-rounded btn-outline-danger">Batal</a>

                            </div>
                        </div>
                        <br><br>
                    </form>
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
    @endsection

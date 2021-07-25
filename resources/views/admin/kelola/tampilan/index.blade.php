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
        <form action="/admin/kelola/tampilan/update" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <input type="hidden" name="id" value="1">
            <div class="row">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        @foreach ($tampilans as $tampilans)
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/1.JPG') }}" alt="Card image cap"> <br>
                        <br><br>

                        <h4 class="card-title">Foto Background</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="background" autofocus>
                            @error('background.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <img id='img-upload' style="width: 600px" /> <br>

                        <h4 class="card-title">Header</h4>
                        <div class="form-group">
                            <input type="text" name="header" id="header" placeholder="{{ $tampilans->header }}" value="{{ $tampilans->header }}" class="form-control">
                            @error('header')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Slogan</h4>
                        <div class="form-group">
                            <input type="text" name="slogan" id="slogan" placeholder="{{ $tampilans->slogan }}" value="{{ $tampilans->slogan }}" class="form-control">
                            @error('slogan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        @endforeach
                    </div>
                </div>
                <br>
                <br><br>
                <br>
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/2.JPG') }}" alt="Card image cap">
                        <br>
                        <br><br>
                        <h4 class="card-title">Judul Sambutan</h4>
                        <div class="form-group">
                            <input type="text" name="judul_sambutan" id="judul_sambutan" placeholder="{{ $tampilans->judul_sambutan }}" value="{{ $tampilans->judul_sambutan }}" class="form-control">
                            @error('judul_sambutan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Hashtag</h4>
                        <div class="form-group">
                            <input type="text" name="hashtag" id="hashtag" placeholder="{{ $tampilans->hashtag }}" value="{{ $tampilans->hashtag }}" class="form-control">
                            @error('hashtag')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Kata Sambutan</h4>
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="kata_sambutan" id="kata_sambutan">{{ $tampilans->kata_sambutan }}</textarea>
                            @error('kata_sambutan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <hr>
                        <br>

                        <h4 class="card-title">Foto Ketua</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="gambar_ketua" autofocus>
                            @error('gambar_ketua.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <img id='img-upload' style="width: 600px">
                        <h4 class="card-title">Nama Ketua</h4>
                        <div class="form-group">
                            <input type="text" name="nama_ketua" id="nama_ketua" placeholder="{{ $tampilans->nama_ketua }}" value="{{ $tampilans->nama_ketua }}" class="form-control">
                            @error('nama_ketua')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Keterangan Ketua</h4>
                        <div class="form-group">
                            <input type="text" name="keterangan_ketua" id="keterangan_ketua" placeholder="{{ $tampilans->keterangan_ketua }}" value="{{ $tampilans->keterangan_ketua }}" class="form-control">
                            @error('keterangan_ketua')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <hr>
                        <br>
                        <h4 class="card-title">Foto Wakil Ketua</h4>
                        <fieldset class="form-group">
                            <input type="file" class="form-control-file" id="imgInp" name="gambar_wakil" autofocus>
                            @error('gambar_wakil.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <img id='img-upload' style="width: 600px" />

                        <h4 class="card-title">Nama Wakil Ketua</h4>
                        <div class="form-group">
                            <input type="text" name="nama_wakil" id="nama_wakil" placeholder="{{ $tampilans->nama_wakil }}" value="{{ $tampilans->nama_wakil }}" class="form-control">
                            @error('nama_wakil')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Keterangan Wakil Ketua</h4>
                        <div class="form-group">
                            <input type="text" name="keterangan_wakil" id="keterangan_wakil" placeholder="{{ $tampilans->keterangan_wakil }}" value="{{ $tampilans->keterangan_wakil }}" class="form-control">
                            @error('keterangan_wakil')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/3.JPG') }}" alt="Card image cap"> <br>
                        <br><br>
                        <h4 class="card-title">Judul Video</h4>
                        <div class="form-group">
                            <input type="text" name="judul_video" id="judul_video" placeholder="{{ $tampilans->judul_video }}" value="{{ $tampilans->judul_video }}" class="form-control">
                            @error('judul_video')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Judul Video 2</h4>
                        <div class="form-group">
                            <input type="text" name="judul2_video" id="judul2_video" placeholder="{{ $tampilans->judul2_video }}" value="{{ $tampilans->judul2_video }}" class="form-control">
                            @error('judul2_video')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="card-title">Link Video</h4>
                        <div class="form-group">
                            <input type="text" name="link_video" id="link_video" placeholder="{{ $tampilans->link_video }}" value="{{ $tampilans->link_video }}" class="form-control">
                            @error('link_video')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/4.JPG') }}" alt="Card image cap"> <br>
                        <br><br>
                        <h4 class="card-title">Link Maps</h4>
                        <div class="form-group">
                            <input type="text" name="link_maps" id="link_maps" placeholder="{{ $tampilans->link_maps }}" value="{{ $tampilans->link_maps }}" class="form-control">
                            @error('link_maps')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Keterangan Contact Person</h4>
                        <div class="form-group">
                            <input type="text" name="keterangan_contact" id="keterangan_contact" placeholder="{{ $tampilans->keterangan_contact }}" value="{{ $tampilans->keterangan_contact }}" class="form-control">
                            @error('keterangan_contact')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <h4 class="card-title">Contact Person</h4>
                        <div class="form-group">
                            <input type="text" name="contact" id="contact" placeholder="{{ $tampilans->contact }}" value="{{ $tampilans->contact }}" class="form-control">
                            @error('contact')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" id="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                <a href="/admin/dashboard" class="btn waves-effect waves-light btn-rounded btn-danger">Batal</a>
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
</div>
@endsection
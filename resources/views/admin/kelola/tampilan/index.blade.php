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
                                    Tampilan Web </li>
                            </ol>
                        </nav>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form action="/admin/kelola/info/edit" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row">
                    <div class="card" style="width: 100%">
                        <div class="card-body">

                            <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/1.JPG') }}"
                                alt="Card image cap"> <br>
                            <br><br>

                            <h4 class="card-title">Foto Background</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" id="imgInp" name="gambar[]" required autofocus>
                                @error('gambar.*')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <img id='img-upload' style="width: 600px" /> <br>

                            <h4 class="card-title">Header</h4>
                            <div class="form-group">
                                <input type="text" name="header" id="header" placeholder="BEM SV UNDIP 2021"
                                    class="form-control">
                                @error('header')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Slogan</h4>
                            <div class="form-group">
                                <input type="text" name="slogan" id="slogan"
                                    placeholder="Karya Nyata Ciptakan Jawara, untuk Vokasi Juara!" class="form-control">
                                @error('slogan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <br><br>
                    <br>
                    <div class="card" style="width: 100%">
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/2.JPG') }}"
                                alt="Card image cap">
                            <br>
                            <br><br>
                            <h4 class="card-title">Judul Sambutan</h4>
                            <div class="form-group">
                                <input type="text" name="judul" id="judul"
                                    placeholder="Hello, selamat datang di BEM SV UNDIP 2021" class="form-control">
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Hashtag</h4>
                            <div class="form-group">
                                <input type="text" name="hashtag" id="hashtag" placeholder="#CHAMPIONSEVERYWHERE"
                                    class="form-control">
                                @error('hashtag')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Kata Sambutan</h4>
                            <div class="form-group">
                                <textarea class="form-control" rows="7" name="kata" id="kata"
                                    placeholder="Dimaknai sebagai ungkapan bentuk semangat pemberdayaan dan pergerakan serta menandakan bahwa mahasiswa Sekolah Vokasi dapat berprestasi dimanapun dan kapanpun, yang ingin kami ciptakan untuk membawa perubahan besar Sekolah Vokasi agar dapat menebar nilai kebermanfaatan bagi seluruh mahasiswa Sekolah Vokasi"></textarea>
                                @error('kata')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <hr>
                            <br>

                            <h4 class="card-title">Foto Ketua</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" id="imgInp" name="gambar[]" required autofocus>
                                @error('gambar.*')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <img id='img-upload' style="width: 600px">
                            <h4 class="card-title">Nama Ketua</h4>
                            <div class="form-group">
                                <input type="text" name="ketua" id="ketua" placeholder="Muhammad Khadafi Rhamdani"
                                    class="form-control">
                                @error('ketua')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Keterangan Ketua</h4>
                            <div class="form-group">
                                <input type="text" name="ketua2" id="ketua2" placeholder="Ketua BEM SV UNDIP 2021"
                                    class="form-control">
                                @error('ketua2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <hr>
                            <br>
                            <h4 class="card-title">Foto Wakil Ketua</h4>
                            <fieldset class="form-group">
                                <input type="file" class="form-control-file" id="imgInp" name="gambar[]" required autofocus>
                                @error('gambar.*')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </fieldset>
                            <img id='img-upload' style="width: 600px" />

                            <h4 class="card-title">Nama Wakil Ketua</h4>
                            <div class="form-group">
                                <input type="text" name="wakil" id="wakil" placeholder="Salsabila" class="form-control">
                                @error('wakil')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Keterangan Wakil Ketua</h4>
                            <div class="form-group">
                                <input type="text" name="wakil2" id="wakil2" placeholder="Wakil Ketua BEM SV UNDIP 2021"
                                    class="form-control">
                                @error('wakil2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%">
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/3.JPG') }}"
                                alt="Card image cap"> <br>
                            <br><br>
                            <h4 class="card-title">Judul Video</h4>
                            <div class="form-group">
                                <input type="text" name="video" id="video"
                                    placeholder="Launching Kabinet
                                                                                                                                                                                                                                "
                                    class="form-control">
                                @error('video')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <h4 class="card-title">Judul Video 2</h4>
                            <div class="form-group">
                                <input type="text" name="video2" id="video2" placeholder="Cipta Jawara BEM SV 2021"
                                    class="form-control">
                                @error('video2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4 class="card-title">Link Video</h4>
                            <div class="form-group">
                                <input type="text" name="link" id="link"
                                    placeholder="https://www.youtube.com/embed/fz2E2J3WUaU?autoplay=0&mute=1"
                                    class="form-control">
                                @error('link')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%">
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/tampilan/4.JPG') }}"
                                alt="Card image cap"> <br>
                            <br><br>
                            <h4 class="card-title">Link Maps</h4>
                            <div class="form-group">
                                <input type="text" name="maps" id="maps"
                                    placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.279731153339!2d110.43363807420486!3d-7.051535479627631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c048655d6fd%3A0xc24f6ee77c4a6a79!2sSekolah%20Vokasi%20Undip!5e0!3m2!1sen!2sid!4v1620656674377!5m2!1sen!2sid"
                                    class="form-control">
                                @error('maps')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <h4 class="card-title">Keterangan Contact Person</h4>
                            <div class="form-group">
                                <input type="text" name="ketcp" id="ketcp"
                                    placeholder="Website ini dikelola oleh Biro Kantor Media Informasi BEM SV UNDIP 2021"
                                    class="form-control">
                                @error('ketcp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <h4 class="card-title">Contact Person</h4>
                            <div class="form-group">
                                <input type="text" name="cp" id="cp"
                                    placeholder="Contact Person BEM SV Undip 2021 : 08123123123 (Nama)"
                                    class="form-control">
                                @error('cp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" id="submit"
                        class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
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

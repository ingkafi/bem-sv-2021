@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">Informasi</h2>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a class="text-muted">{{ $info->judul }}</a>
                                </li>
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
                <div class="col-12 mt-4">
                    <div class="card-deck">
                        <div class="card">
                            <?php $images = json_decode($info->gambar); ?>
                            @foreach ($images as $file)
                                <?php
                                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                $explodeImage = explode('.', $file);
                                $extension = end($explodeImage);
                                ?>
                                <img class="card-img-top img-fluid" src="{{ asset('uploads/gambar/' . $file) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $info->judul }}</h2>
                                    <span style="float: right; text-align: right">
                                        <?php
                                        $monthNum = date('m', strtotime($info->created_at));
                                        $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                        $monthName = $dateObj->format('F');
                                        ?>
                                        <p class="card-text"><small class="text-muted">
                                                {{ date('j', strtotime($info->created_at)) }} {{ $monthName }}
                                                {{ date('Y', strtotime($info->created_at)) }} <br> Penulis :
                                                {{ $info->created_by }}
                                            </small></p>
                                    </span>
                                    <p class="card-text">{{ $info->isi }}</p>

                                    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Kembali</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.main')

@section('content')
    <style>
        .photo-gallery {
            color: white;
            background-color: #14192f;
        }

        .photo-gallery p {
            color: #7d8285;
        }

        .photo-gallery h2 {
            font-weight: bold;
            color: inherit;
        }

        @media (max-width:200) {
            .photo-gallery h2 {
                font-size: 24px;
            }
        }

        .photo-gallery .intro {
            font-size: 16px;
        }

        .photo-gallery .intro p {
            margin-bottom: 0;
        }

    </style>

    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    </head>
    <!-- HERO -->
    @php
    $kab = App\Models\Kabinet::where('tahun', $struktur->first()->tahun)->first();
    @endphp
    <section class="hero2 d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('{{ asset('uploads/kabinet/' . $kab->gambar) }}" id="home">
        <div class="bg-overlay2"></div>
    </section>
    <section class="class section" id="class">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Struktur Organisasi BEM SV UNDIP</h2>
                    <h3 data-aos="fade-up" data-aos-delay="200">{{ $kab->nama }}</h3>
                </div>
                @foreach ($struktur as $s)
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400"
                        style="padding-bottom: 35px;">
                        <div class="class-thumb">
                            <a href="{{ asset('uploads/struktur/' . $s->gambar) }}" data-lightbox="photos">
                                <img src="{{ asset('uploads/struktur/' . $s->gambar) }}" class="img-fluid" alt="Class"
                                    style="width:400px;height:500px;object-fit: cover"></a>
                        </div>
                    </div>
                @endforeach

            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    </section>

@endsection
</body>

</html>

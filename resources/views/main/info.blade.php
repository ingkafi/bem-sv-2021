@extends('layouts.main')

@section('content')
    <style>
        @media (max-width: 768px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* display 3 */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(33.333%);
            }

            .carousel-inner .carousel-item-left.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-33.333%);
            }
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);
        }

    </style>
    <!-- HERO -->
    <section class="hero4 d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row"><br><br>
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h2 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">Informasi Terkini</h2>
                        <h6 data-aos="fade-up" data-aos-delay="600" style="color: white">Geser untuk melihat informasi
                            lainnya</h6>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="container text-center my-3">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card card-body" style="height: 550px">

                                            <img class="img-fluid" alt="100%x280"
                                                style="height: 300px; width:300px;object-fit: cover;"
                                                src="{{ asset('uploads/informasi/' . $info1->file_path) }}">
                                            <?php
                                            $monthNum = date('m', strtotime($info1->created_at));
                                            $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                            $monthName = $dateObj->format('F');
                                            ?>
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $info1->judul }}</h3>
                                                <p class="card-text">{{ date('j', strtotime($info1->created_at)) }}
                                                    {{ $monthName }}
                                                    {{ date('Y', strtotime($info1->created_at)) }}</p>
                                                <p data-aos="fade-up" data-aos-delay="50">
                                                    {{ substr($info1->isi, 0, 50) }}....
                                                </p>
                                                <a href="/info/{{ $info1->id }}/show" class="card-text">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($infos as $row)
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card card-body" style="height: 550px">
                                                <img class="img-fluid" alt="100%x280"
                                                    style="height: 300px; width:300px;object-fit: cover;"
                                                    src="{{ asset('uploads/informasi/' . $row->file_path) }}">
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $row->judul }}</h3>
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <p class="card-text">{{ date('j', strtotime($row->created_at)) }}
                                                        {{ $monthName }}
                                                        {{ date('Y', strtotime($row->created_at)) }}</p>
                                                    <p data-aos="fade-up" data-aos-delay="50">
                                                        {{ substr($row->isi, 0, 50) }}....
                                                    </p>
                                                    <a href="/info/{{ $row->id }}/show" class="card-text">Baca
                                                        Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info border border-info rounded-circle"
                                    aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-info border border-info rounded-circle"
                                    aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#recipeCarousel').carousel({
            interval: 10000
        })

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
@endsection
</body>

</html>

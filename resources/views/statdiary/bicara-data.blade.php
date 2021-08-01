@extends('layouts.stat')

@section('content')
    <!-- HERO -->
    <section class="hero4 d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">BULETIN</h1>
                        <h6 data-aos="fade-up" data-aos-delay="300">BEM SV UNDIP 2021
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="schedule section" id="schedule" style="background-color: #e9a702">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-4 text-center">
                </div>
                <div class="col-lg-4 col-4 text-center">
                    <h6 data-aos="fade-up">Jumlah Buletin</h6>
                    <h2 class="text-white count" data-aos="fade-up" data-aos-delay="200"> {{ $buletinall->count() }}</h2>
                </div>
                <div class="col-lg-4 col-4 text-center">
                </div>
            </div>
        </div>
    </section>
    <section class="schedule section" id="schedule" style="background-color: rgb(255, 255, 255)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 data-aos="fade-up" data-aos-delay="200">Buletin Terkini</h2>
                    <h3 data-aos="fade-up" data-aos-delay="200">Geser untuk melihat buletin lainnya</h3>
                    <br>
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
                                                    src="{{ asset('uploads/buletin/' . $buletin1->gambar) }}">
                                                <?php
                                                $monthNum = date('m', strtotime($buletin1->created_at));
                                                $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                $monthName = $dateObj->format('F');
                                                ?>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $buletin1->judul }}</h3>
                                                    <p class="card-text">{{ date('j', strtotime($buletin1->created_at)) }}
                                                        {{ $monthName }}
                                                        {{ date('Y', strtotime($buletin1->created_at)) }}</p>
                                                    <p data-aos="fade-up" data-aos-delay="50">
                                                        {{ substr($buletin1->isi, 0, 50) }}....
                                                    </p>
                                                    <a href="{{ $buletin1->link }}" class="card-text">Baca
                                                        Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($buletins as $row)
                                        <div class="carousel-item">
                                            <div class="col-md-4">
                                                <div class="card card-body" style="height: 550px">

                                                    <img class="img-fluid" alt="100%x280"
                                                        style="height: 300px; width:300px;object-fit: cover;"
                                                        src="{{ asset('uploads/buletin/' . $row->gambar) }}">
                                                    <?php
                                                    $monthNum = date('m', strtotime($row->created_at));
                                                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                                                    $monthName = $dateObj->format('F');
                                                    ?>
                                                    <div class="card-body">
                                                        <h3 class="card-title">{{ $row->judul }}</h3>
                                                        <p class="card-text">{{ date('j', strtotime($row->created_at)) }}
                                                            {{ $monthName }}
                                                            {{ date('Y', strtotime($row->created_at)) }}</p>
                                                        <p data-aos="fade-up" data-aos-delay="50">
                                                            {{ substr($row->isi, 0, 50) }}....
                                                        </p>
                                                        <a href="{{ $row->link }}" class="card-text">Baca
                                                            Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-info border border-info rounded-circle"
                                        aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon bg-info border border-info rounded-circle"
                                        aria-hidden="true"></span>
                                </a>
                            </div>
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

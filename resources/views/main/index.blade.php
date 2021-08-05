@extends('layouts.main')

@section('content')
    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('/uploads/tampilan/{{ $tampilan->background }}')" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">BEM SV UNDIP 2021</h1>
                        <h6 data-aos="fade-up" data-aos-delay="300">Karya Nyata Ciptakan Jawara, untuk Vokasi Juara!
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <section class="feature" id="feature" style="background-color: #14192f">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the gymso?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE ($62.50 per month)</h6>

                    <p data-aos="fade-up" data-aos-delay="200">Gymso is free HTML template by <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a> for your commercial website. Bootstrap v4.2.1 Layout. Feel free to use it.</p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section> --}}


    <!-- ABOUT -->
    <div style="background-color: white">
        <br><br>
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{ $tampilan->judul_sambutan }}
                    </h2>

                    <p data-aos="fade-up" data-aos-delay="400"><b>{{ $tampilan->hashtag }}</b> <br> <br>
                        {{ $tampilan->kata_sambutan }}
                    </p>

                    <p data-aos="fade-up" data-aos-delay="500">Mau tau lebih tentang kami? <a rel="nofollow" href="/profil"
                            target="_parent">Klik disini</a></p>

                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="/uploads/tampilan/{{ $tampilan->gambar_ketua }}" class="img-fluid"
                            alt="{{ $tampilan->nama_ketua }}">

                        <div class="team-info d-flex flex-column">

                            <h3>{{ $tampilan->nama_ketua }}</h3>
                            <span>{{ $tampilan->keterangan_ketua }}</span>

                            <ul class="social-icon mt-3">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up"
                    data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="/uploads/tampilan/{{ $tampilan->gambar_wakil }}" class="img-fluid"
                            alt="{{ $tampilan->nama_wakil }}">

                        <div class="team-info d-flex flex-column">
                            <br>
                            <h3>{{ $tampilan->nama_wakil }}</h3>
                            <span>{{ $tampilan->keterangan_wakil }}</span>
                            <br>

                            <ul class="social-icon mt-3">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br><br>
    </div>

    <section class="schedule section" id="schedule" style="background-color: #14192f">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-4 text-center">
                    <h6 data-aos="fade-up">Biro</h6>
                    <h2 class="text-white count" data-aos="fade-up" data-aos-delay="200"> 11</h2>
                </div>
                <div class="col-lg-4 col-4 text-center">
                    <h6 data-aos="fade-up">Program Kerja</h6>
                    <h2 class="text-white count" data-aos="fade-up" data-aos-delay="200"> 45</h2>
                </div>
                <div class="col-lg-4 col-4 text-center">
                    <h6 data-aos="fade-up">Pengurus</h6>
                    <h2 class="text-white count" data-aos="fade-up" data-aos-delay="200"> 100</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h2 data-aos="fade-up" data-aos-delay="200">Informasi Terkini</h2>
                </div>
            </div>
            <div class="row">
                <div class="container text-center my-3">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card card-body" style="height: 550px" data-aos="fade-up"
                                            data-aos-delay="200">

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
                                            <div class="card card-body" style="height: 550px" data-aos="fade-up"
                                                data-aos-delay="200">
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
            <div>
                <br><br>
                <p data-aos="fade-up" data-aos-delay="500" style="text-align: center">Baca informasi lainnya <a
                        rel="nofollow" href="/info" target="_parent">disini</a>
                </p>
            </div>
    </section>


    <!-- SCHEDULE -->
    <section class="schedule section" id="schedule" style="background-color: #14192f">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-4 text-center">
                    <h6 data-aos="fade-up">{{ $tampilan->judul_video }}</h6>

                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">{{ $tampilan->judul2_video }}</h2>
                    <br><br>
                </div>
                <iframe data-aos="fade-up" data-aos-delay="200" width="1366" height="768"
                    src="{{ $tampilan->link_video }}">
                </iframe>
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

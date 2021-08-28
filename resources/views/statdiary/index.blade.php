@extends('layouts.stat')

@section('content')
    <!-- HERO -->
    <section class="hero4 d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">BIRO STATISTIK</h1>
                        <h6 data-aos="fade-up" data-aos-delay="300">BEM SV UNDIP 2021
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
                    <h2 class="" data-aos="fade-up" data-aos-delay="300">Apa itu Statistic Diary?
                    </h2> <br>
                    <p data-aos="fade-up" data-aos-delay="400" style="text-align: justify">
                        Statistic Diary merupakan sebuah wadah publikasi database milih BEM SV UNDIP yang dihimpun oleh Biro
                        Statistik berdasarkan sumber resmi yang terpercaya maupun bidang-bidang dalam BEM SV UNDIP.
                        Statistic Diary juga menampilkan publikasi hasil survei yang dilakukan dan diolah oleh Biro
                        Statistik dalam bentuk laporan, serta hasil infografis menarik berbasis data mengenai suatu hal
                        tertentu yang disajikan dalam rubrik Bicara Data.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="500">Mau tau lebih tentang kami? <a rel="nofollow"
                            href="https://instagram.com/bemsv.birostat" target="_parent">Klik disini</a></p>
                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur1->foto }}" class="img-fluid">

                        <div class="team-info d-flex flex-column">

                            <h3>{{ $struktur1->nama }}</h3>
                            <span>{{ $struktur1->jabatan }}</span>

                            <ul class="social-icon mt-3">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up"
                    data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur2->foto }}" class="img-fluid">

                        <div class="team-info d-flex flex-column">
                            <br>
                            <h3>{{ $struktur2->nama }}</h3>
                            <span>{{ $struktur2->jabatan }}</span>
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

    <section class="schedule section" id="schedule" style="background-color: rgb(241, 241, 241)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 data-aos="fade-up" data-aos-delay="200">Struktur Biro Statistik BEM SV UNDIP
                        2021</h2>
                    <br>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur1->foto }}" class="img-fluid" alt="Class"
                            style="width:d;height:500px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $struktur1->nama }}</h3>
                            <p data-aos="fade-up" data-aos-delay="150">
                                {{ $struktur1->jabatan }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur2->foto }}" class="img-fluid" alt="Class"
                            style="width:d;height:500px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $struktur2->nama }}</h3>
                            <p data-aos="fade-up" data-aos-delay="150">
                                {{ $struktur2->jabatan }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur3->foto }}" class="img-fluid" alt="Class"
                            style="width:d;height:500px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $struktur3->nama }}</h3>
                            <p data-aos="fade-up" data-aos-delay="150">
                                {{ $struktur3->jabatan }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 text-center"><br>
                    <br><br><br>
                    <h3 data-aos="fade-up" data-aos-delay="200">{{ $struktur5[1]->jabatan }}</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur5ketua->foto }}" class="img-fluid" alt="Class"
                            style="width:d;height:500px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $struktur5ketua->nama }}</h3>
                            <p data-aos="fade-up" data-aos-delay="150">
                                {{ $struktur5ketua->jabatan }}
                            </p>
                        </div>
                    </div>
                </div>
                @foreach ($struktur5 as $row)
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="/uploads/statisticdiary/{{ $row->foto }}" class="img-fluid" alt="Class"
                                style="width:d;height:500px;object-fit: cover">
                            <div class="class-info" style="height: auto">
                                <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $row->nama }}</h3>
                                <p data-aos="fade-up" data-aos-delay="150">
                                    {{ $row->jabatan }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-12 text-center"><br>
                    <br><br><br>
                    <h3 data-aos="fade-up" data-aos-delay="200">{{ $struktur4[1]->jabatan }}</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="/uploads/statisticdiary/{{ $struktur4ketua->foto }}" class="img-fluid" alt="Class"
                            style="width:d;height:500px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $struktur4ketua->nama }}</h3>
                            <p data-aos="fade-up" data-aos-delay="150">
                                {{ $struktur4ketua->jabatan }}
                            </p>
                        </div>
                    </div>
                </div>
                @foreach ($struktur4 as $row)
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="/uploads/statisticdiary/{{ $row->foto }}" class="img-fluid" alt="Class"
                                style="width:d;height:500px;object-fit: cover">
                            <div class="class-info" style="height: auto">
                                <h3 class="mb-1" data-aos="fade-up" data-aos-delay="400">{{ $row->nama }}</h3>
                                <p data-aos="fade-up" data-aos-delay="150">
                                    {{ $row->jabatan }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
</body>

</html>

@extends('layouts.stat')

@section('content')
    <!-- HERO -->
    <section class="hero4 d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">SV UNDIP DALAM ANGKA</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule section" id="schedule" style="background-color: white ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-4 text-center">
                    <h4 data-aos="fade-up">Program Studi</h4>
                    <h1 class="mb-1" data-aos="fade-up" data-aos-delay="200"> 11</h1>
                </div>
                <div class="col-lg-4 col-4 text-center">
                    <h4 data-aos="fade-up">Mahasiswa</h4>
                    <h1 class="mb-1" data-aos="fade-up" data-aos-delay="200"> 45</h1>
                </div>
                <div class="col-lg-4 col-4 text-center">
                    <h4 data-aos="fade-up">Dosen</h4>
                    <h1 class="mb-1" data-aos="fade-up" data-aos-delay="200"> 100</h1>
                </div> <br><br> <br><br><br><br><br><br>
            </div>
            <div class="row">
                <div class="col-lg-6 col-6 text-center">
                    <h4 data-aos="fade-up">UKM</h4>
                    <h1 class="mb-1" data-aos="fade-up" data-aos-delay="200"> 65</h1>
                </div>
                <div class="col-lg-6 col-6 text-center">
                    <h4 data-aos="fade-up">Himpunan</h4>
                    <h1 class="mb-1" data-aos="fade-up" data-aos-delay="200"> 100</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="class section" id="class" style="background-color: #ffbc12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h1 data-aos="fade-up" data-aos-delay="200">Arsip Database</h1>
                </div>
            </div>
            <div class="class-thumb text-center" data-aos="fade-up">
                <div class="class-info" style="height: auto">
                    <a href="#">
                        <h2>Judul Database</h2>
                    </a>
                </div>
            </div>
            <br>
            <div class="class-thumb text-center" data-aos="fade-up">
                <div class="class-info" style="height: auto">
                    <a href="#">
                        <h2>Judul Database</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>

</html>

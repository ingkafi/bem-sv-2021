@extends('layouts.main')

@section('content')
<!-- HERO -->
<section class="hero2 d-flex flex-column justify-content-center align-items-center" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto col-12">
                <div class="hero-text mt-5 text-center">
                    <h1 data-aos="fade-up" data-aos-delay="500" style="color: white">PROGRAM KERJA BEM SV UNDIP 2021
                    </h1>
                    <h3 data-aos="fade-up" data-aos-delay="400" style="color: #ffbc12">Kabinet Cipta Jawara
                    </h3>
                    <h6 data-aos="fade-up" data-aos-delay="300">Karya Nyata Ciptakan Jawara, untuk Vokasi Juara!
                    </h6>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- ABOUT -->
<div style="background-color: #14192f">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto col-12">
                <div class="hero-text mt-5 text-center">
                    <h1 data-aos="fade-up" data-aos-delay="500" style="color: white">Program Kerja</h1>
                </div>
            </div>

        </div>
        <div class="row justify-content-md-center">
            @foreach ($prokers as $prokers)
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <div class="class-thumb">
                    <img src="{{ asset('uploads/proker/'.$prokers->gambar) }}" class="img-fluid" alt="Class">

                    <div class="class-info">
                        <h3 class="mb-1">{{ $prokers->proker }}</h3>
                        <p class="mt-3">{{ $prokers->keterangan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>
    <br>
</div>


@endsection
</body>

</html>
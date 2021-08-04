@extends('layouts.stat')

@section('content')
    <!-- HERO -->
    <section class="hero4 d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">Buletin TERKINI</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 mx-auto col-12" data-aos="fade-up" data-aos-delay="400">
                    <?php
                    $monthNum = date('m', strtotime($buletin1->created_at));
                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');
                    ?>

                    <div class="class-thumb">
                        <img src="{{ asset('uploads/buletin/' . $buletin1->gambar) }}" class="img-fluid" alt="Class"
                            style="width:1000px;height:300px;object-fit: cover">
                        <div class="class-info" style="height: auto">
                            <h3 class="mb-1">{{ $buletin1->judul }}</h3>
                            <span><strong>{{ date('j', strtotime($buletin1->created_at)) }} {{ $monthName }}
                                    {{ date('Y', strtotime($buletin1->created_at)) }}</strong></span><br> <br>
                            <p data-aos="fade-up" data-aos-delay="50">{{ substr($buletin1->isi, 0, 200) }}....
                            </p>
                            <p data-aos="fade-up" data-aos-delay="150">
                                <a rel="nofollow" href="/statdiary/{{ $buletin1->id }}/detailsurvey">Baca
                                    selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule section" id="schedule" style="background-color: #ffbc12">
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
    <section class="artikel-area" style="background-color: #fafdfb;">
        <div class="container">
            <div class="col-12">
                <div class="hero-text mt-5 text-center">
                    <h1 data-aos="fade-up" data-aos-delay="500" style="color: black">BULETIN LAINNYA</h1><br><br>
                </div>
            </div>
            <div class="row">
                @foreach ($buletinpag as $row)
                    <?php
                    $monthNum = date('m', strtotime($row->created_at));
                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');
                    ?>
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="{{ asset('uploads/buletin/' . $row->gambar) }}" class="img-fluid" alt="Class"
                                style="width:400px;height:300px;object-fit: cover">
                            <div class="class-info" style="height: auto">
                                <h3 class="mb-1">{{ $row->judul }}</h3>
                                <span><strong>{{ date('j', strtotime($row->created_at)) }} {{ $monthName }}
                                        {{ date('Y', strtotime($row->created_at)) }}</strong></span><br> <br>
                                <p data-aos="fade-up" data-aos-delay="50">{{ substr($row->isi, 0, 50) }}....
                                </p>
                                <p data-aos="fade-up" data-aos-delay="150">
                                    <a rel="nofollow" href="/statdiary/{{ $row->id }}/detailsurvey">Baca
                                        selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
                {!! $buletinpag->links() !!}
            </div>
        </div>

        <br><br><br><br>
    </section>
@endsection
</body>

</html>

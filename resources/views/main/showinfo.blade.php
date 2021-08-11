@extends('layouts.main')

@section('content')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=60fb739eb819bf001391762d&product=inline-share-buttons"
        async="async">
    </script>
    <!-- HERO -->

    <section class="hero3 d-flex flex-column justify-content-center align-items-center" id="home"
        style="background-image: url('{{ asset('uploads/informasi/' . $info->file_path) }}')">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h2 data-aos=" fade-up" data-aos-delay="500" style="color: white">{{ $info->judul }}
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div style="background-color: white">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-10 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-down" data-aos-delay="100">{{ $info->judul }}
                    </h2> <br>
                    <?php
                    $monthNum = date('m', strtotime($info->created_at));
                    $dateObj = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');
                    ?>
                    <p data-aos="fade-down" data-aos-delay="400" style="text-align: justify"> <b>Diunggah
                            {{ date('j', strtotime($info->created_at)) }}
                            {{ $monthName }}
                            {{ date('Y', strtotime($info->created_at)) }}</b> <br> <br>
                        {{ $info->isi }}</p> <br>
                    <p data-aos="fade-down" data-aos-delay="300">Contact Person : <br>
                        <b>{{ $info->cp_nama }} </b>(<a href="http://line.me/ti/p/~{{ $info->cp_line }}">Line </a>/ <a
                            href="https://wa.me/{{ $info->cp_wa }}">WhatsApp</a>)
                    </p><br><br>
                    <div data-aos="fade-up" data-aos-delay="600" class="sharethis-inline-share-buttons"></div><br><br>
                    <p data-aos="fade-down" data-aos-delay="300">
                        <a href="/info"><b>Baca Informasi Lainnya</b></a>
                    </p>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection
</body>

</html>

@extends('layouts.stat')

@section('content')
<br>
<br>
<br>
<section class="schedule section" id="schedule" style="background-color: rgb(255, 255, 255)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <!-- judul diganti judul database -->
                <h1 data-aos="fade-up" data-aos-delay="200">{{ $buletin->judul }}</h1>
            </div>
            <div class="col-lg-12 col-12 text-center" style="margin-bottom: 5%;">
                <!-- isi diganti isi database -->
                <h5 data-aos="fade-up" data-aos-delay="200">{{ $buletin->isi }}</h5>
            </div>
            <br>
            <br>
            <div class="col-lg-12 col-12">
                <div class="embed-responsive embed-responsive-1by1">
                    <!-- link drive nya diganti link dr database -->
                    <?php $str = $buletin->link ?>
                    <?php $str = chop($str, "/view?usp=sharing") ?>
                    <iframe src="<?= $str; ?>/preview" width="640" height="480" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
</body>

</html>
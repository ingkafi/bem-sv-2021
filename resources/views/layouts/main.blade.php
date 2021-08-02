<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('admin/assets/images/favicon.png') }}">
    <title>Welcome to BEM SV UNDIP 2021</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/tooplate-gymso-style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css"> --}}
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="/">BEM SV UNDIP 2021</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link smoothScroll">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a href="/info" class="nav-link smoothScroll">Informasi</a>
                    </li>

                    <li class="nav-item">
                        <a href="/proker" class="nav-link smoothScroll">Program Kerja</a>
                    </li>

                    <li class="nav-item">
                        <a href="/profil" class="nav-link smoothScroll">Profil BEM SV UNDIP 2021</a>
                    </li>

                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://www.youtube.com/channel/UCkjScG4F2k9xna_BDomhD3Q" class="fab fa-youtube"></a>
                    </li>
                    <li><a href="https://twitter.com/bemsvundip_" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/bemsvundip_/?hl=en" class="fab fa-instagram"></a></li>
                    <li><a href="https://msng.link/o/?@plv1845d=ln" class="fab fa-line"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(window).scroll(function() {
            var offset = $(window).scrollTop();
            console.log(offset);
            $('.navbar').toggleClass('trans', offset > 50);
        });
    </script>

    <!-- SCRIPTS -->
    <script src={{ URL::asset('assets/js/jquery.min.js') }}></script>
    <script src={{ URL::asset('assets/js/custom.js') }}></script>
    <script src={{ URL::asset('assets/js/smoothscroll.js') }}></script>
    <script src={{ URL::asset('assets/js/aos.js') }}></script>
    <script src={{ URL::asset('assets/js/bootstrap.min.js') }}></script>
    <script>
        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
                // checks if window is scrolled more than 500px, adds/removes solid class
                if ($(this).scrollTop() > 100) {
                    $('.navbar').addClass('solid');
                } else {
                    $('.navbar').removeClass('solid');
                }
            });
        });
    </script>
    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <div>
        @yield('content')
    </div>
    <section class="contact section" id="contact" style="background-color: rgb(241, 241, 241)">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-0 pb-0" data-aos="fade-up" data-aos-delay="200">Punya Kritik & Saran?</h2>
                    <h2 class="mb-0 pb-2" data-aos="fade-up" data-aos-delay="200">Tulis Yuk!</h2>

                    <form action="/aspirasi" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        @method('patch')
                        @csrf
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                        <textarea class="form-control" rows="11" name="isi" placeholder="Pesan"></textarea>
                        <button type="submit" class="form-control" id="submit-button" name="submit">Kirim</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="" data-aos="fade-up" data-aos-delay="600">Find Us!</h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Semarang, Indonesia
                    </p>
                    <!-- How to change your own map point
                                 1. Go to Google Maps
                                 2. Click on your location point
                                 3. Click "Share" and choose "Embed map" tab
                                 4. Copy only URL and paste it within the src="" field below
                                -->
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="{{ $tampilan->link_maps }}" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p>{{ $tampilan->keterangan_contact }}
                    </p>
                    <p>
                        {{ $tampilan->contact }}
                    </p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p> <br>
                        <a href="#">© 2021 Copyright: <a rel="nofollow" href="#" target="_parent"> <b>
                                    bemsvundip.com</b></a>
                            <br>
                            Made With Love From
                            <a rel="nofollow" href="https://instagram.com/sarafdesign.id" target="_parent"><b>Saraf Design</b> </a>
                    </p>
                </div>

            </div>
        </div>
    </footer>
    @include('sweetalert::alert')
</body>

</html>
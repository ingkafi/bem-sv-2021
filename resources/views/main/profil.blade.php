@extends('layouts.main')

@section('content')
    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" style="height: 3cm" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 data-aos="fade-up" data-aos-delay="500" style="color: white">Informasi Terkini</h1>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ URL::asset('assets/images/class/yoga-class.jpg') }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Informasi 1</h3>

                            <span><strong>27 April 2021</strong>

                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow"
                                        href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca
                                        selengkapnya...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ URL::asset('assets/images/class/yoga-class.jpg') }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Informasi 1</h3>

                            <span><strong>27 April 2021</strong>

                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow"
                                        href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca
                                        selengkapnya...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="{{ URL::asset('assets/images/class/yoga-class.jpg') }}" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Informasi 1</h3>

                            <span><strong>27 April 2021</strong>

                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow"
                                        href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca
                                        selengkapnya...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>

</html>

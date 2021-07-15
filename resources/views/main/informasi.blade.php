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
                                        Selengkapnya......</a></p>
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
                                        Selengkapnya......</a></p>
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
                                        Selengkapnya......</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule section" id="schedule" style="background-color: #14192f">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3" style="color: white">Informasi Lainnya </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body">
                                                <h3 class="card-title">Judul Informasi</h3>
                                                <p class="card-text">27 April 2021</p>
                                                <a href="#" class="card-text">Baca Selengkapnya...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>

</html>

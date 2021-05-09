<!DOCTYPE html>
<html lang="en">
<head>

     <title>Welcome to BEM SV UNDIP 2021</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet"  href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
     <link rel="stylesheet"  href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
     <link rel="stylesheet"  href="{{ URL::asset('assets/css/aos.css') }}">
     <link rel="stylesheet"  href="{{ URL::asset('assets/css/tooplate-gymso-style.css') }}">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     {{-- <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css"> --}}
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">BEM SV UNDIP 2021</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Informasi</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Program Kerja</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link smoothScroll">Profil BEM SV UNDIP 2021</a>
                    </li>

                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://www.youtube.com/channel/UCkjScG4F2k9xna_BDomhD3Q" class="fab fa-youtube"></a></li>
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


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                  
                                  <h1 data-aos="fade-up" data-aos-delay="500" style="color: #ffbc12">BEM SV UNDIP 2021</h1>
                                  <h6 data-aos="fade-up" data-aos-delay="300">Karya Nyata Ciptakan Jawara, untuk Vokasi Juara!</h6>
{{-- 
                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a> --}}
                                   
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
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, selamat datang di BEM SV UNDIP 2021</h2>

                                <p data-aos="fade-up" data-aos-delay="400"><b>#CHAMPIONSEVERYWHERE</b> <br> <br>
                                    Dimaknai sebagai ungkapan bentuk semangat pemberdayaan dan pergerakan serta menandakan bahwa mahasiswa Sekolah Vokasi dapat berprestasi dimanapun dan kapanpun, yang ingin kami ciptakan untuk membawa perubahan besar Sekolah Vokasi agar dapat menebar nilai kebermanfaatan bagi seluruh mahasiswa Sekolah Vokasi</p>

                                <p data-aos="fade-up" data-aos-delay="500">Mau tau lebih tentang kami? <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Klik disini</a></p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="{{ URL::asset('assets/images/team/team-image.jpg')}}" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Muhammad Khadafi Rhamdani</h3>
                                        <span>Ketua BEM SV UNDIP 2021</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="{{ URL::asset('assets/images/team/team-image01.jpg')}}" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">
                                        <br>
                                        <h3>Salsabila</h3>
                                        <span>Wakil Ketua BEM SV UNDIP 2021</span>
                                        <br>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">
                            <div class="col-lg-12 col-12 text-center mb-5">
                                {{-- <h6 data-aos="fade-up">Get A Perfect Body</h6> --}}

                                <h2 data-aos="fade-up" data-aos-delay="200">Informasi Terkini</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ URL::asset('assets/images/class/yoga-class.jpg')}}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Informasi 1</h3>

                                        <span><strong>27 April 2021</strong>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                        <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca selengkapnya...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ URL::asset('assets/images/class/yoga-class.jpg')}}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Informasi 2</h3>

                                        <span><strong>27 April 2021</strong>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                        <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca selengkapnya...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="{{ URL::asset('assets/images/class/yoga-class.jpg')}}" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Informasi 3</h3>

                                        <span><strong>27 April 2021</strong>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                        <p data-aos="fade-up" data-aos-delay="50"> <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Baca selengkapnya...</a></p>
                                    </div>
                                </div>
                            </div>
                
                    </div>
                    <br> <br>
                        <div style="text-align: center">
                        <p data-aos="fade-up" data-aos-delay="500">Baca informasi lainnya <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">disini</a></p>
                        </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div>
               </div>
     </section>


     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-0 pb-0" data-aos="fade-up" data-aos-delay="200">Punya Kritik & Saran?</h2>
                        <h2 class="mb-0 pb-2" data-aos="fade-up" data-aos-delay="200">Tulis Yuk!</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Nama">

                            {{-- <input type="email" class="form-control" name="cf-email" placeholder="Email"> --}}

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Pesan"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Kirim</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.
                        
                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a></p>
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@company.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

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
          if($(this).scrollTop() > 100) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});
     </script>
     {{-- <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script> --}}

</body>
</html>
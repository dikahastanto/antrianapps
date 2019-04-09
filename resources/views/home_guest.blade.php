<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Colorlib App - App Landing Page</title>

    <!-- Favicon -->
    <link rel="icon" href="{{url('botstrap4/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link href="{{url('botstrap4/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{url('botstrap4/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-right">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#"><img width="50" src="{{url('img/queue.png')}}" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Screenshot</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Antrian Apps</h2>
                        <p>Mau ngantri ? ya Antrian Apps dong</p>
                    </div>
                    <div class="get-start-area">
                        <div class="row">
                          <div class="col-md-2">
                            <a href="{{url('app/antrian.apk')}}"> <button type="button" class="btn submit-btn" name="button">Get it On Andoird</button> </a>
                            <br><br>
                          </div>
                          <div class="col-md-4">
                            <a href="#"> <button type="button" class="btn submit-btn" name="button">Get it On iOS</button> </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <!-- <img src="{{url('img/queue.png')}}" alt="" class='img-responsive'> -->
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Mengapa Harus Antrian Apps</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <h4>Pencarian</h4>
                        <p>Pilih tanggal dan waktu terbaik yang menurut kamu tepat untuk mengantri</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h4>Status</h4>
                        <p>Cek status antrian kamu, lihat perubahan waktu prediksi.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <h4>Jadwal</h4>
                        <p>Lihat jadwal dokter favorit kamu dan pilih waktu konsultasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="{{url('img/1.png')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{url('img/2.png')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{url('img/3.png')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{url('img/4.png')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{url('img/5.png')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{url('img/6.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->


    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Ca.</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2017 Ca. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{url('botstrap4/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{url('botstrap4/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{url('botstrap4/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{url('botstrap4/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    <script src="{{url('botstrap4/js/slick.min.js')}}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{url('botstrap4/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{url('botstrap4/js/active.js')}}"></script>
</body>

</html>

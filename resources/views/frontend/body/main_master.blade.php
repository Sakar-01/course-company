<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Course-Company</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontend/assets/images/fav.png')}}" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel='stylesheet' id='font-awesome-min-css' href="{{asset('frontend/css/font-awesome.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='font-icomoon-css' href="{{asset('frontend/css/icomoon.fonts.css')}}" type='text/css' media='all' />

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel='stylesheet' href="{{asset('frontend/assets/css/featherlight.css')}}">

    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container top d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:Info@admin.co.uk">Info@admin.co.uk</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>
                        +910000000000</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a target="_blank" href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                <a target="_blank" href="https://wa.me/910000000000" class="whatsapp"><i class="bi bi-whatsapp"></i></i></a>
            </div>
            <ul class="top-nav">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                <li><a href="{{url('login')}}"><i class="bi bi-person-fill"></i> Login</a></li>

                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                <li><a href="{{url('register')}}"><i class="bi bi-arrow-bar-up"></i> Sign Up</a></li>
                </li>
                @endif
                @else
                <li><a href="{{url('home')}}"><i class="bi bi-house-fill"></i> My Account</a></li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
                <!-- <li><a href="{{url('register')}}"><i class="bi bi-arrow-bar-up"></i> Sign Up</a></li> -->
                <!-- <li><a href="{{url('login')}}"><i class="bi bi-person-fill"></i> Login</a></li> -->
            </ul>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{url('/')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="" srcset=""><span></span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>

                    <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{url('course/javascript-course')}}">JavaScript for Modern Web Development</a></li>
                            <li><a href="{{url('course/user-interface')}}">User Interface (UI) Design Essentials</a></li>
                            <li><a href="{{url('course/web-design')}}">Responsive Web Design Mastery</a></li>
                            <li><a href="{{url('course/frontend-frameworks')}}">Frontend Frameworks: Vue.js Crash Course</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="{{url('career')}}">Career</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->






    @yield('frontend')









    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>GET THE COACHING TRAINING BY
                            Course-Company FOR LESS
                        </h4>
                        <p>It’s limited seating! Hurry up
                        </p>

                        <a class="btn btn-primary" href="{{url('courses')}}">VIEW COURSES</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('courses')}}">All Courses</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">About us</a></li>
                       </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Course-Company<span>.</span></h3>
                        <p>
                            Bengaluru, Karnataka 560001, India<br><br>
                            <strong>Phone:</strong>
                            +910000000000<br>
                            <strong>Email:</strong> Info@admin.co.uk<br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a target="_blank" href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></i></a>
                            <a target="_blank" href="https://wa.me/" class="whatsapp"><i class="bx bxl-whatsapp"></i></i></a>

                        </div>
                    </div>


                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->



                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Course-Company.</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <!-- <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script> -->
    <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/featherlight.js')}}"></script>
    <!-- <script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script> -->

    <!-- Template Main JS File -->
    <script src="{{asset('frontend/assets/js/maugallery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
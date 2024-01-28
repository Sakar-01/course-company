@extends('frontend/body/main_master')
@section('frontend')
    <style>
        .swiper-slide {
            flex-shrink: 1 !important;
        }

        .item {
            padding-left: 5px;
            padding-right: 5px;
            margin-top: 10px;
        }

        .item-card {
            transition: 0.5s;
            cursor: pointer;
            width: 20em;
        }

        .item-card-feedback {
            transition: 0.5s;
            cursor: pointer;
            width: 15em;
        }

        .item-card img {
            height: 300px;
        }

        .item-card-feedback img {
            height: 100px;
            width: 100px;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 45px;
        }

        .item-card-feedback h5 {
            padding: 0 10px !important;
            color: #333;
        }

        .item-card-feedback p {
            font-size: 12px;
            padding: 6px;
            color: #333;
        }

        .item-card-title {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
        }

        .item-card-title i {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
            color: #ffa710
        }

        .card-title i:hover {
            transform: scale(1.25) rotate(100deg);
            color: #18d4ca;

        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
            z-index: 10000;
        }

        #coaching {
            background: #05456b;
            color: #fff;
        }

        .card-text {
            height: 80px;
        }

        .card::before,
        .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }

        .card::before {
            transform-origin: left top;
        }

        .card::after {
            transform-origin: right bottom;
        }

        h5 {
            color: #333;
        }

        .card:hover::before,
        .card:hover::after,
        .card:focus::before,
        .card:focus::after {
            transform: scale3d(1, 1, 1);
        }
    </style>


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                 
                    <div class="carousel-item" style="background-image: url('frontend/assets/images/slider2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown" data-aos="fade-up">Course Company EXPERTS In
                                    <span>Project Training</span>
                                </h2>
                                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    data-aos="fade-up">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2 -->
                       <div class="carousel-item active" style="background-image: url('frontend/assets/images/slider1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown" data-aos="fade-up">IT Courses
                                    <span>From Experts
                                    </span>
                                </h2>
                                <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    data-aos="fade-up">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <h3>What We Offer To <span>Students</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">TRAINING COURSES
                                </a></h4>
                            <p>Your chance to be an expert in Project Management industries and make a successful career
                                after completion of our courses.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">BOOKS & LIBRARY
                                </a></h4>
                            <p>Course Company is committed with original syllabuses and books for each course we
                                provide to our trainees</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">CERTIFIED TEACHERS
                                </a></h4>
                            <p>Get professional education and reliable consultation by our team of certified teachers
                                and
                                instructors.

                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">CERTIFICATION
                                </a></h4>
                            <p>Upon successful completion receive a certificate showing your achievement for completing
                                one
                                of our rigorous classes.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Courses Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h2>Courses</h2>
                    <h3>Check our <span>Courses</span></h3>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="{{ url('course/javascript-course') }}">
                                <div class=" card item-card card-block">
                                    <img src="{{ asset('frontend/assets/images/5-set-schedule-270x283.jpg') }}"
                                        alt="Photo of sunset">
                                    <h5 class="card-title mt-3 mb-3 p-2">JavaScript for Modern Web Development</h5>
                                </div>
                            </a>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <a href="{{ url('course/user-interface') }}">

                                <div class=" card item-card card-block">
                                    <img src="{{ asset('frontend/assets/images/pmp.jpg') }}" alt="Photo of sunset">
                                    <h5 class="card-title mt-3 mb-3 p-2">User Interface (UI) Design Essentials</h5>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="{{ url('course/web-design') }}">
                                <div class=" card item-card card-block">
                                    <img src="{{ asset('frontend/assets/images/rmp.png') }}" alt="Photo of sunset">
                                    <h5 class="card-title mt-3 mb-3 p-2">Responsive Web Design Mastery</h5>
                                </div>
                            </a>
                        </div>
                        <!-- End testimonial item -->
                        <div class="swiper-slide">
                            <a href="{{ url('course/frontend-frameworks') }}">
                                <div class=" card item-card card-block">
                                    <img src="{{ asset('frontend/assets/images/acp2.jpg') }}" alt="Photo of sunset">
                                    <h5 class="card-title mt-3 mb-3 p-2">Frontend Frameworks: Vue.js Crash Course</h5>
                                </div>
                            </a>
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>YOU CAN LEARN</span></h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Project Management</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Advanced Project Management</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Web Development</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Cost Engineering Course</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center mb-5 mb-lg-0 p-4">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Human Resources</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->
        <!-- ======= Coaching Lists Section ======= -->
        <section class="about-lists" id='coaching'>
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3 style="text-transform: uppercase;">We have coaching services as well to become</span></h3>
                </div>
                <div class="row no-gutters">
                    <hr>
                    <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
                        <span>01</span>
                        <h4>Frontend Developer</h4>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>Backend Developer</h4>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <span>03</span>
                        <h4>Mobile App Developer</h4>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                        <span>04</span>
                        <h4>Java Developer</h4>
                    </div>

                </div>

            </div>
        </section><!-- End About Lists Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about" style="background-color: #f6f9fe;">
            <div class="container" data-aos="fade-up">


                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-4 video-box">
                        <img src="{{ asset('frontend/assets/images/v1.jpg') }}" class="img-fluid" alt="">
                        <!-- <a href="#" class="venobox play-btn mb-8" data-vbtype="video" data-autoplay="true"></a> -->
                    </div>

                    <div class="col-lg-8 d-flex flex-column justify-content-center">

                        <!-- ======= SUCCESS STORIES ======= -->
                        <section id="feedbacks" class="feedbacks">
                            <div class="container" data-aos="zoom-in">
                                <h2>SUCCESS STORIES</h2>
                                <div class="feedbacks-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="card item-card-feedback card-block">
                                                <img src="{{ asset('frontend/assets/images/f1.png') }}"
                                                    class="feedback-img" alt="">
                                                <h5 class="card-title mt-3 mb-3 p-2">Client 1</h5>
                                                <p>"Great instructor! Understands and communicates certification
                                                    requirements effectively. Inspiring teaching style made the course
                                                    engaging and supportive."</p>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card item-card-feedback card-block">
                                                <img src="{{ asset('frontend/assets/images/f2.png') }}"
                                                    class="feedback-img" alt="">
                                                <h5 class="card-title mt-3 mb-3 p-2">Client 2</h5>
                                                <p>"Impressed by the company's dedication to project goals and client
                                                    satisfaction. The positive attitude and strong communication skills
                                                    shine through."</p>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card item-card-feedback card-block">
                                                <img src="{{ asset('frontend/assets/images/f3.png') }}"
                                                    class="feedback-img" alt="">
                                                <h5 class="card-title mt-3 mb-3 p-2">Client 3</h5>
                                                <p>"Highly recommend the company's courses. The unique teaching approach
                                                    simplifies complex topics, resulting in a smooth learning experience."
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Add more slides as needed -->

                                    </div>
                                    <div class="swiper-pagination1"></div>
                                </div>

                            </div>
                        </section><!-- End Testimonials Section -->

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Bengaluru, Karnataka 560001, India</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>Info@admin.co.uk</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+910000000000</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://maps.app.goo.gl/NqpUcbVSzqcWt92Q6" frameborder="0"
                            style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ url('contact') }}" method="POST" class="php-email-form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name *" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email *" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message *" required></textarea>
                            </div>
                            <div class="my-3">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection

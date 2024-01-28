@extends('frontend/body/main_master')
@section('frontend')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>Welcome to <span>Course Company!</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt=""
                            data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <p>

                            Welcome to Course Company, a leading education provider committed to delivering outstanding
                            learning experiences in project management and certification courses. Our mission is to empower
                            individuals with essential skills, offering comprehensive courses that cover industry-standard
                            practices.

                            At Course Company, we take pride in our team of experienced instructors who bring extensive
                            knowledge and practical insights to every course. Our dedication to excellence is evident in our
                            interactive teaching methods, inspiring students to confidently meet and exceed certification
                            requirements.

                            Embark on a transformative learning journey with us, where our courses go beyond textbooks,
                            providing real-world insights and practical knowledge. Join Course Company and take the next
                            step in advancing your career through quality education and professional development. </p>
                        <h3>Our Services</h3>
                        <ul>
                            <li>
                                <p>Technical & Management Training</p>
                            </li>
                            <li>
                                <p>Project management services.</p>
                            </li>
                            <li>
                                <p>Safety consulting and auditing.</p>
                            </li>
                            <li>
                                <p>Structural design consulting.</p>
                            </li>

                        </ul>
                        <!-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href=""> Our Mission
                                </a></h4>
                            <p>Identifying, understanding, promoting and providing the right mix of knowledge and skills to
                                professionals and corporate houses through quality training and superior customer service
                                and help them achieve competitive advantage.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Our Vission
                                </a></h4>
                            <p>To become the most customer preferred training provider in the world helping our clients
                                minimizes the risks inherent in the projects</p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <h3>Why Course Company?</h3>
                        <p>At Course Company, we stand out as your preferred education partner for a variety of compelling
                            reasons. Our commitment to excellence, experienced instructors, and hands-on learning approach
                            set us apart. Here's why you should choose us:</p>
                        <ul>
                            <li><strong>Experienced Instructors:</strong> Learn from seasoned professionals with a wealth of
                                industry knowledge, ensuring you receive top-notch guidance.</li>
                            <li><strong>Comprehensive Courses:</strong> Our courses cover the latest industry practices,
                                equipping you with practical skills that go beyond theoretical knowledge.</li>
                            <li><strong>Interactive Learning:</strong> Engage in interactive sessions that make learning
                                enjoyable and effective, fostering a deeper understanding of the subject matter.</li>
                            <li><strong>Real-World Insights:</strong> Gain valuable insights from real-world scenarios,
                                bridging the gap between theory and practical application.</li>
                            <li><strong>Supportive Community:</strong> Join a vibrant community of learners, where
                                collaboration and knowledge-sharing thrive, creating a supportive environment for your
                                educational journey.</li>
                            <li><strong>Proven Success:</strong> Our track record of successful graduates attests to the
                                effectiveness of our courses in preparing individuals for certification and career
                                advancement.</li>
                        </ul>
                    </div>

                    <br>
                    <br>
                    <hr>
                
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Training Division
                                </a></h4>
                            <p>Elevate your skills with our Training Division, where excellence meets education. Our comprehensive courses, led by experienced instructors, empower individuals to thrive in their professional journeys. From cutting-edge technologies to industry best practices, we deliver the knowledge you need for success.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Project Management & Consulting
                                </a></h4>
                            <p>In the realm of Project Management & Consulting, we offer more than services; we deliver solutions. Our seasoned professionals bring a wealth of expertise to streamline projects and drive success. With a focus on efficiency and innovation, we partner with you to navigate complexities and achieve your project goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
@endsection

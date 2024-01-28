@extends('frontend/body/main_master')
@section('frontend')
    <main id="main" data-aos="fade-up">

        @include('frontend.course.course-head')


        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <h3 class="section-title">Responsive Web Design Mastery

                </h3>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center justify-content-center">
                                <div class="swiper-slide w-50">
                                    <img src="{{ asset('frontend/assets/images/5-set-schedule-270x283.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Course information</h3>
                            <ul>
                                <li><strong>Duration</strong>: 24 Hrs.</li>
                                <li><strong>Lectures</strong>: 12 Lecture</li>
                                <li><strong>Certificate of Completion</strong></li>
                            </ul>


                            @guest

                                <div class="alert alert-primary" role="alert">
                                    <h4>Login to Get Course</h4><br>
                                    <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                                </div>
                            @else
                                @if ($approvalstatus == 'Request Approval')
                                    <a onclick="event.preventDefault();
                                                                            document.getElementById('approval-form').submit();"
                                        class="btn btn-primary">{{ $approvalstatus }}</a>

                                    <form id="approval-form" action="{{ url('approval/add') }}" method="POST" class="d-none">
                                        @csrf
                                        <input type="hidden" name="course_slug"
                                            value="scheduling-professional-exam-preparation-pmi-sp">

                                    </form>
                                @elseif ($approvalstatus == 'Approved')
                                    <div class="alert alert-success" role="alert">
                                        Status: {{ $approvalstatus }} <br>
                                        Download Your Course: course.zip
                                    </div>
                                @else
                                    <div class="alert alert-success" role="alert">
                                        Status: {{ $approvalstatus }}
                                    </div>
                                @endif

                            @endguest






                        </div>

                    </div>
                </div>
                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>COURSE DESCRIPTION</h2>
                            <p>
                                Dive into the world of responsive web design and gain mastery over creating websites that
                                seamlessly adapt to various devices and screen sizes. Learn the fundamentals of HTML5, CSS3,
                                and media queries to build responsive layouts. Explore advanced techniques such as flexbox
                                and grid systems for pixel-perfect responsiveness. </p>
                        </div>
                    </div>


                </div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Benefits of Attending</h2>
                            <ul>
                                <li>Acquire a comprehensive understanding of responsive design principles.
                                </li>
                                <li>Develop skills to create visually appealing and user-friendly websites across different
                                    devices.</li>
                                <li>Stay ahead in the industry by learning the latest tools and techniques.
                                </li>
                                <li>Build a strong portfolio showcasing your proficiency in responsive web design.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>What is the target audience?

                            </h2>
                            <p>This course is ideal for aspiring and intermediate-level web developers, UI/UX designers, and
                                anyone looking to enhance their skills in creating websites that seamlessly adapt to
                                different devices. Whether you are a freelancer, a student, or a professional seeking to
                                stay updated with the latest industry standards, this course caters to individuals with a
                                foundational understanding of HTML and CSS who want to specialize in responsive design.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>CURRICULUM
                            </h2>
                            <section id="faq" class="faq section-bg">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div>
                                            <ul class="faq-list">
                                                <div data-bs-toggle="collapse" href="#faq6"
                                                    class="collapsed question mb-4">
                                                    Course Content: Responsive Web Design Mastery
                                                    <i class="bi bi-chevron-down icon-show"></i><i
                                                        class="bi bi-chevron-up icon-close"></i>
                                                </div>
                                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                    <p><strong>Introduction to Responsive Web Design:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Course Introduction</li>
                                                        <li>Importance of Responsive Design</li>
                                                    </ul>
                                                    <p><strong>HTML5 and CSS3 Essentials:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>HTML5 Markup</li>
                                                        <li>CSS3 Styling Techniques</li>
                                                        <li>Media Queries Basics</li>
                                                    </ul>
                                                    <p><strong>Advanced Layout Techniques:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Flexbox and Its Applications</li>
                                                        <li>Grid Systems for Responsive Design</li>
                                                        <li>Responsive Images and Media</li>
                                                    </ul>
                                                    <p><strong>Responsive Design Best Practices:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Optimizing Performance for Mobile</li>
                                                        <li>Testing and Debugging Across Devices</li>
                                                        <li>Accessibility in Responsive Design</li>
                                                    </ul>
                                                    <p><strong>Hands-on Projects and Real-world Applications:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Building a Responsive Portfolio</li>
                                                        <li>Creating a Responsive Landing Page</li>
                                                        <li>Responsive Design for E-commerce</li>
                                                    </ul>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>


                <div class="row gy-4">
                    <div class="col-lg-8">
                        <hr>
                        <div class="portfolio-info">
                            <h3>ABOUT INSTRUCTORS
                            </h3>
                            <div>
                                <div style="display: flex;">
                                    <div>
                                        <img src="{{ asset('frontend/assets/images/f1.png') }}"
                                            style="width: 80px;border-radius: 40px;margin:10px" alt="">
                                    </div>
                                    <div style="align-self: end;">
                                        <h4>Sarah Johnson</h4>
                                        <p>web developer</p>
                                    </div>
                                </div>
                                <hr>
                                <p style="text-align:justify;">Sarah Johnson, Sarah is a seasoned web developer with over a decade of experience in creating responsive and visually stunning websites. She has worked with various clients across different industries, bringing a wealth of practical knowledge to the course.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection

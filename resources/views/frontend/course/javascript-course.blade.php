@extends('frontend/body/main_master')
@section('frontend')
    <main id="main" data-aos="fade-up">

        @include('frontend.course.course-head')


        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <h3 class="section-title">JavaScript for Modern Web Development
                </h3>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center justify-content-center">
                                <div class="swiper-slide w-50">
                                    <img src="{{ asset('frontend/assets/images/pmp.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Course information</h3>
                            <ul>
                                <li><strong>Duration</strong>: 35 Hrs.</li>
                                <li><strong>Lectures</strong>: 18 Lecture</li>
                                <li><strong>Video</strong>: 5 Hours</li>
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
                                        <input type="hidden" name="course_slug" value="project-management-professional-pmp">

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
                                Explore the power of JavaScript and learn how it has evolved for modern web development.
                                From basic syntax to advanced frameworks like React and Angular, this course covers
                                everything you need to become a proficient JavaScript developer.

                            </p>
                            <h6>Benefits of Attending
                            </h6>
                            <ul>
                                <li>Master the fundamentals of JavaScript programming.</li>
                                <li>Gain hands-on experience with popular JavaScript frameworks</li>
                                <li>Build dynamic and interactive web applications</li>
                                <li>Enhance your employability by acquiring sought-after JavaScript skills.
                                </li>
                            </ul>
                            <h6>Target Audience:

                            </h6>
                            <p>This course is designed for beginners and intermediate developers interested in mastering
                                JavaScript for modern web development. It's suitable for individuals with basic knowledge of
                                HTML and CSS who want to delve deeper into frontend development. Whether you are a student
                                looking to build a strong programming foundation or a developer aiming to expand your skill
                                set with modern JavaScript frameworks, this course is tailored to meet your needs.

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
                                                <div data-bs-toggle="collapse" href="#faq7"
                                                    class="collapsed question mb-4">
                                                    Course Content: JavaScript for Modern Web Development
                                                    <i class="bi bi-chevron-down icon-show"></i><i
                                                        class="bi bi-chevron-up icon-close"></i>
                                                </div>
                                                <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                                    <p><strong>Introduction to JavaScript:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Basic Syntax and Variables</li>
                                                        <li>Data Types and Operators</li>
                                                        <li>Functions and Scope</li>
                                                    </ul>
                                                    <p><strong>DOM Manipulation and Events:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Manipulating HTML Elements</li>
                                                        <li>Event Handling and EventListeners</li>
                                                        <li>Asynchronous JavaScript</li>
                                                    </ul>
                                                    <p><strong>Modern JavaScript Features (ES6+):</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Arrow Functions and Template Literals</li>
                                                        <li>Spread and Rest Operators</li>
                                                        <li>Destructuring and Default Parameters</li>
                                                    </ul>
                                                    <p><strong>Introduction to JavaScript Frameworks:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Overview of React.js and Angular</li>
                                                        <li>Setting Up Development Environment</li>
                                                        <li>Creating Components and Services</li>
                                                    </ul>
                                                    <p><strong>Building Single Page Applications (SPAs):</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Routing and Navigation</li>
                                                        <li>State Management with Redux and RxJS</li>
                                                        <li>RESTful API Integration</li>
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
                                        <h4>Alex Rodriguez
                                        </h4>
                                        <p>full-stack developer</p>
                                    </div>
                                </div>
                                <hr>
                                <p style="text-align:justify;">Alex is a passionate full-stack developer with a focus on
                                    JavaScript technologies. With a background in both frontend and backend development, he
                                    brings real-world project experience to the classroom, enriching the learning journey
                                    for every student.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection

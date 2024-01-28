@extends('frontend/body/main_master')
@section('frontend')
    <main id="main" data-aos="fade-up">


        @include('frontend.course.course-head')


        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <h3 class="section-title">Frontend Frameworks: Vue.js Crash Course</h3>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center justify-content-center">
                                <div class="swiper-slide w-50">
                                    <img src="{{ asset('frontend/assets/images/acp2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Course information</h3>
                            <ul>
                                <li><strong>Duration</strong>: 21 hours</li>
                                <li><strong>Lectures</strong>: 7</li>
                                <li><strong>Video</strong>: None</li>
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
                                            value="agile-certified-practitioner-pmi-acp-pmi">

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
                                This crash course on Vue.js is designed for frontend developers and web developers who are
                                familiar with HTML, CSS, and basic JavaScript. It's ideal for individuals who want to add
                                Vue.js to their skill set and learn how to build dynamic and reactive web applications.
                                Whether you are a junior developer aiming to expand your toolkit or an experienced developer
                                exploring frontend frameworks, this course is tailored to help you quickly grasp the
                                essentials of Vue.js.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Course Objectives</h2>
                            <p>Immerse yourself in Vue.js, one of the most versatile frontend frameworks. Learn the basics
                                of Vue.js and progress to advanced topics like state management with Vuex and routing with
                                Vue Router. Build dynamic and reactive web applications with ease.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Benefits of Attending
                            </h2>
                            <ul>
                                <li>Gain a solid understanding of Vue.js and its core concepts
                                </li>
                                <li>Learn to build scalable and maintainable frontend applications.
                                </li>
                                <li>Explore real-world applications of Vue.js in the industry.
                                </li>
                                <li>Elevate your frontend development skills with a focus on Vue.js
                                </li>
                            </ul>
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
                                        <div class="col-xl-10">
                                            <h3>Section 1</h3>
                                            <ul class="faq-list">
                                                <div data-bs-toggle="collapse" href="#faq6"
                                                    class="collapsed question mb-4">
                                                    Course Content: Frontend Frameworks - Vue.js Crash Course
                                                    <i class="bi bi-chevron-down icon-show"></i><i
                                                        class="bi bi-chevron-up icon-close"></i>
                                                </div>
                                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                    <p><strong>Introduction to Vue.js and Vue Components:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Understanding Vue.js Basics</li>
                                                        <li>Components and Component-Based Architecture</li>
                                                        <li>Data Binding and Events</li>
                                                    </ul>
                                                    <p><strong>Vue Directives and Data Binding:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Exploring Vue Directives</li>
                                                        <li>Two-Way Data Binding</li>
                                                        <li>Computed Properties</li>
                                                    </ul>
                                                    <p><strong>State Management with Vuex:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Introduction to Vuex</li>
                                                        <li>Managing State in Vue Applications</li>
                                                        <li>Actions, Mutations, and Getters</li>
                                                    </ul>
                                                    <p><strong>Routing with Vue Router:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Setting up Vue Router</li>
                                                        <li>Navigation Guards and Route Parameters</li>
                                                        <li>Lazy Loading Routes</li>
                                                    </ul>
                                                    <p><strong>Vue.js Best Practices:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Optimizing Performance in Vue.js Apps</li>
                                                        <li>Structuring Vue Projects</li>
                                                        <li>Testing Vue Components</li>
                                                    </ul>
                                                    <p><strong>Building a Vue.js Project:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Hands-on Project: Creating a Vue App</li>
                                                        <li>Integrating External APIs with Vue</li>
                                                        <li>Deploying Vue.js Applications</li>
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
                                        <h4>Alex Hernandez</h4>
                                        <p>instructor</p>
                                    </div>
                                </div>
                                <hr>
                                <p style="text-align:justify;">Alex Hernandez
                                <p>Alex Hernandez is a passionate frontend developer with a focus on Vue.js and modern
                                    JavaScript frameworks. With extensive experience in building dynamic and scalable web
                                    applications, Alex brings a wealth of knowledge to the Vue.js Crash Course.</p>
                                <p>Having worked on a variety of projects ranging from startups to enterprise-level
                                    applications, Alex understands the ins and outs of Vue.js and how it can elevate the
                                    development process. His expertise extends to state management with Vuex, routing with
                                    Vue Router, and implementing best practices for optimized Vue.js applications.</p>
                                <p>A firm believer in the power of hands-on learning, Alex is dedicated to providing a
                                    practical and engaging learning experience. Join him in the Vue.js Crash Course to
                                    accelerate your journey into frontend development and master the art of building robust
                                    Vue.js applications.</p>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection

@extends('frontend/body/main_master')
@section('frontend')
    <main id="main" data-aos="fade-up">


        @include('frontend.course.course-head')


        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <h3 class="section-title">User Interface (UI) Design Essentials</h3>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center justify-content-center">
                                <div class="swiper-slide w-50">
                                    <img src="{{ asset('frontend/assets/images/rmp.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Course information</h3>
                            <ul>
                                <li><strong>Duration</strong>: 30 hours</li>
                                <li><strong>Lectures</strong>: 14</li>
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
                                        <input type="hidden" name="course_slug" value="risk-management-professional-pmi-rmp">

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
                            <p>UI Design Essentials is crafted for aspiring UI/UX designers, graphic designers, and web
                                developers who want to enhance their skills in creating visually appealing and user-friendly
                                interfaces. It is suitable for beginners with a creative flair as well as professionals
                                looking to strengthen their design fundamentals. This course is ideal for those who
                                understand the basics of digital design and want to delve into the principles of effective
                                UI/UX.
                            </p>
                        </div>
                    </div>


                </div>
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Course Objectives</h2>
                            Delve into the principles of effective UI design and create visually appealing and user-friendly
                            interfaces. Learn the importance of user experience (UX) and how to apply design thinking to
                            enhance the overall usability of digital products.
                        </div>
                    </div>
                </div>


                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>Benefits of Attending
                            </h2>
                            <p>
                            <ul>
                                <li>Understand the key principles of UI and UX design</li>
                                <li>Develop proficiency in design tools like Adobe XD and Figma.</li>
                                <li>Create stunning visual interfaces for web and mobile applications.</li>
                                <li>Gain insights into the latest design trends and best practices.</li>
                            </ul>
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
                                        <div class="col-xl-10">
                                            <h3>Section 1</h3>
                                            <ul class="faq-list">
                                                <div data-bs-toggle="collapse" href="#faq6"
                                                    class="collapsed question mb-4">
                                                    Course Content: User Interface (UI) Design Essentials
                                                    <i class="bi bi-chevron-down icon-show"></i><i
                                                        class="bi bi-chevron-up icon-close"></i>
                                                </div>
                                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                                    <p><strong>Introduction to UI/UX Design:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Understanding UI vs. UX</li>
                                                        <li>Role of Design in Digital Products</li>
                                                        <li>Design Thinking Principles</li>
                                                    </ul>
                                                    <p><strong>Design Thinking and User-Centered Design:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>User Research and Persona Creation</li>
                                                        <li>Wireframing and Prototyping</li>
                                                        <li>Usability Testing</li>
                                                    </ul>
                                                    <p><strong>Visual Hierarchy and Typography:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Principles of Visual Hierarchy</li>
                                                        <li>Typography Basics and Best Practices</li>
                                                        <li>Color Theory in UI Design</li>
                                                    </ul>
                                                    <p><strong>Prototyping with Adobe XD and Figma:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Introduction to Adobe XD and Figma</li>
                                                        <li>Creating Interactive Prototypes</li>
                                                        <li>Collaborative Design Workflows</li>
                                                    </ul>
                                                    <p><strong>Responsive Design Principles:</strong></p>
                                                    <br>
                                                    <ul>
                                                        <li>Adapting Designs for Different Devices</li>
                                                        <li>Responsive Layouts and Grids</li>
                                                        <li>Accessibility in UI Design</li>
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
                                        <h4>Emily Rodriguez</h4>
                                        <p>Web developer</p>
                                    </div>
                                </div>
                                <hr>
                                <p style="text-align:justify;">
                                <p>Emily Rodriguez is a seasoned UI/UX designer with a passion for creating delightful
                                    digital experiences. With over a decade of experience in the field, Emily has worked on
                                    a diverse range of projects, from mobile apps to web platforms.</p>
                                <p>She holds a Master's degree in Interaction Design and is known for her expertise in
                                    user-centered design principles. Emily believes in the power of design to solve problems
                                    and enhance the way users interact with technology.</p>
                                <p>Throughout her career, Emily has collaborated with cross-functional teams, bringing
                                    innovative design solutions to the table. Her teaching style focuses on practical
                                    applications, ensuring that students not only grasp the theoretical aspects but also
                                    gain hands-on experience in creating user-friendly interfaces.</p>
                                <p>Join Emily in the UI Design Essentials course to unlock the secrets of effective design
                                    and elevate your skills in crafting compelling user interfaces.</p>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection

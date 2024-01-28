@extends('frontend/body/main_master')
@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Career</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Career</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Career</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 p-5">
                    <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="mt-5 col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <h3>
                        Start Our Career With Course-Company
                    </h3>
                    <p>
                        New Job openings will start Soon!!
                    </p>
                    <h4 class="mt-5">
                        Please forward your CV to : <br> <a href="mailto:info@admin.com">info@admin.com</a>
                    </h4>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->



</main><!-- End #main -->


@endsection
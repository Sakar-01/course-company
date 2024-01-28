@extends('frontend/body/main_master')
@section('frontend')


<style>
    .item {
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 10px;
    }

    .item-card {
        transition: 0.5s;
        cursor: pointer;
    }

    .item-card img {
        height: 300px;
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



<main id="main">
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Courses</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>All Courses</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <div class="container mt-2">



        <div class="row p-4 mb-4">

            <div class="col-md-3 col-sm-6 item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{url('course/javascript-course')}}">

                    <div class=" card item-card card-block">
                        <img src="{{asset('frontend/assets/images/5-set-schedule-270x283.jpg')}}" alt="Photo of sunset">
                        <h5 class="card-title mt-3 mb-3 p-2">JavaScript for Modern Web Development</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{url('course/user-interface')}}">

                    <div class=" card item-card card-block">
                        <img src="{{asset('frontend/assets/images/pmp.jpg')}}" alt="Photo of sunset">
                        <h5 class="card-title mt-3 mb-3 p-2">User Interface (UI) Design Essentials</h5>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{url('course/web-design')}}">
                    <div class=" card item-card card-block">
                        <img src="{{asset('frontend/assets/images/rmp.png')}}" alt="Photo of sunset">
                        <h5 class="card-title mt-3 mb-3 p-2">Responsive Web Design Mastery</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{url('course/frontend-frameworks')}}">
                    <div class=" card item-card card-block">
                        <img src="{{asset('frontend/assets/images/acp2.jpg')}}" alt="Photo of sunset">
                        <h5 class="card-title mt-3 mb-3 p-2">Frontend Frameworks: Vue.js Crash Course</h5>
                    </div>
                </a>
            </div>


        </div>

    </div>
</main>



@endsection
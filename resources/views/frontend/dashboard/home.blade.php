@extends('frontend/body/main_master')
@section('frontend')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Account</h2>
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Account</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <!-- @if(count($courses) > 0)
            <h1>ss</h1>
            @endif -->

            <div class="row p-4" style="background:#fff !important;">
                <div class="col-lg-8">
                    <h3>My Courses</h3>
                    @if($courses->isEmpty())
                    You did not Have Approved Course <br>
                    <a href="{{url('courses')}}">View Courses</a>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Course Name</th>
                                <th scope="col">Courses Status</th>
                                <th scope="col">File</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($courses as $course)
                            <tr>
                                <td>{{$course->slug}}</td>
                                <td>{{$course->status==0 ? 'Not Approved':'Approved'}}</td>
                                @if($course->status==1)
                                <td><a href="#"> File.zip</a></td>
                                @else
                                <td>File will appear when admin approve</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>

                <div class="col-lg-4 p-4 pt-lg-0 content d-flex flex-column" style="background:#f6f9fe !important;">
                    <h3 style=" padding-top:10px;">Account Information</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">First</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{Auth::user()->name}}</th>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->



</main><!-- End #main -->


@endsection
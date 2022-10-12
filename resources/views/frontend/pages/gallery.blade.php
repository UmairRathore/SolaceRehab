
@extends('frontend.layouts.main')
@section('title', 'SolaceRehab - Gallery')
@section('content')


    <main id="main">
        <style>
            body {
                background: #ccc;
            }

            .carousel-indicators {
                margin-bottom: 70px;
            }

            .carousel-indicators button[data-bs-target] {
                width: 200px;

            }
        </style>
        <div id="carouselsliderdemo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                        <div class="img-bg-inner">
                            <h2> Bridge Rehab Addiction Ends Here</h2>
                            <p>We can solve problems that are beyond your control</p>
                            <form action="{{route('contact')}}">
                                <button type="button" class="btn btn-secondary">Appointment</button>
                            </form>
                        </div>
                    </a>

                </div>
                <div class="carousel-item">
                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                        <div class="img-bg-inner">
                            <h2>Addiction is a Disease</h2>
                            <p>It starts up as a pleasurable activity and ends up in death. Its Primary, Chronic, Progressive and Potentially Fatal</p>
                            <form action="{{route('team')}}">
                                <button type="button" class="btn btn-secondary">Our Team</button>

                            </form>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                        <div class="img-bg-inner">
                            <h2>24/7 Support Services for Indoor Treatment</h2>
                            <p>Do not hesitate to contact us. Bridge Rehanb provides professional counseling and Psychotherapic services for indoor and outdoor treatment.</p>
                            <form action="{{route('about')}}">
                                <button type="button" class="btn btn-secondary">About</button>
                            </form>
                        </div>
                    </a>              </div>
            </div>
            <!-- Indicator start -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselsliderdemo" class="active img-thumbnail"
                        data-bs-slide-to="0">
                    <img src="{{asset('assets/img/post-slide-1.jpg')}}" alt="" class="d-block w-100">
                </button>
                <button type="button" data-bs-target="#carouselsliderdemo" class="img-thumbnail" data-bs-slide-to="1">
                    <img src="{{asset('assets/img/post-slide-2.jpg')}}" alt="" class="d-block w-100">
                </button>
                <button type="button" data-bs-target="#carouselsliderdemo" class="img-thumbnail" data-bs-slide-to="2">
                    <img src="{{asset('assets/img/post-slide-3.jpg')}}" alt="" class="d-block w-100">
                </button>
            </div>
            <!-- Indicator Close -->
        </div>

    </main>
    <!-- End #main -->

@endsection

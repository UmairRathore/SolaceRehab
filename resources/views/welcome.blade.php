@extends('frontend.layouts.main')
@section('title', 'SolaceRehab - Gallery')
@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <style>

    </style>
    <main id="main">


        <!-- ======= Hero Slider Section ======= -->

        {{--  <div class=".slidercontainer" data-aos="">--}}
        {{--    <div class="row text-center" >--}}
        {{--      <div class="col-12 text-center mb-6">--}}
        {{--        <div class="swiper sliderFeaturedPosts">--}}
        {{--            <div class="swiper-wrapper">--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">--}}
        {{--                        <div class="img-bg-inner">--}}
        {{--                            <h2> Bridge Rehab Addiction Ends Here</h2>--}}
        {{--                            <p>We can solve problems that are beyond your control</p>--}}
        {{--                            <form action="{{route('contact')}}">--}}
        {{--                                <input type="submit" value="Appointment" />--}}
        {{--                            </form>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}
        {{--                </div>--}}

        {{--             <div class="swiper-slide">--}}
        {{--              <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">--}}
        {{--                <div class="img-bg-inner">--}}
        {{--                  <h2>Addiction is a Disease</h2>--}}
        {{--                  <p>It starts up as a pleasurable activity and ends up in death. Its Primary, Chronic, Progressive and Potentially Fatal</p>--}}
        {{--                  <form action="{{route('team')}}">--}}
        {{--                    <input type="submit" value="Our Team" />--}}
        {{--                </form>--}}
        {{--                </div>--}}
        {{--              </a>--}}
        {{--            </div>--}}

        {{--            <div class="swiper-slide" >--}}
        {{--              <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">--}}
        {{--                <div class="img-bg-inner">--}}
        {{--                  <h2>24/7 Support Services for Indoor Treatment</h2>--}}
        {{--                  <p>Do not hesitate to contact us. Bridge Rehanb provides professional counseling and Psychotherapic services for indoor and outdoor treatment.</p>--}}
        {{--                  <form action="{{route('about')}}">--}}
        {{--                    <input type="submit" value="About us" />--}}
        {{--                </form>--}}
        {{--                </div>--}}
        {{--              </a>--}}
        {{--            </div>--}}
        {{--              <div class="swiper-slide">--}}
        {{--                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">--}}
        {{--                      <div class="img-bg-inner">--}}
        {{--                          <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>--}}
        {{--                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>--}}
        {{--                      </div>--}}
        {{--                  </a>--}}
        {{--              </div>--}}
        {{--          </div>--}}
        {{--            <div class="custom-swiper-button-next">--}}
        {{--                <span class="bi-chevron-right"></span>--}}
        {{--            </div>--}}
        {{--            <div class="custom-swiper-button-prev">--}}
        {{--                <span class="bi-chevron-left"></span>--}}
        {{--            </div>--}}

        {{--            <div class="swiper-pagination"></div>--}}
        {{--        </div>--}}
        {{--      </div>--}}
        {{--    </div>--}}
        {{--  </div>--}}



        <!-- End Hero Slider Section -->

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
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        <div class="carousel-item active">
                            <div class="swiper-slide" >
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
                        </div>
                        <div class="carousel-item">
                            <div class="swiper-slide" >
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
                        </div>
                        <div class="carousel-item">
                            <div class="swiper-slide" >
                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>24/7 Support Services for Indoor Treatment</h2>
                                        <p>Do not hesitate to contact us. Bridge Rehanb provides professional counseling and Psychotherapic services for indoor and outdoor treatment.</p>
                                        <form action="{{route('about')}}">
                                            <button type="button" class="btn btn-secondary">About</button>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div></div>
                <div class="custom-swiper-button-next">
                    <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                    <span class="bi-chevron-left"></span>
                </div>

                <div class="swiper-pagination"></div>
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
    <script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>

        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints:{
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });

    </script>

@endsection

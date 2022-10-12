<section id="team" class="team mb-5" >
    <div class="container" data-aos="" >
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="display-4">Our Team</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="{{asset('assets/img/person-1.jpg')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                <h4>member 1</h4>
                <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="{{asset('assets/img/person-2.jpg')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                <h4>member 2</h4>
                <span class="d-block mb-3 text-uppercase">Founder, VP</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="{{asset('assets/img/person-3.jpg')}}" alt="" class="img-fluid rounded-circle w-50 mb-4">
                <h4>member 3</h4>
                <span class="d-block mb-3 text-uppercase">Editor Staff</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
            </div>
        </div>
    </div>
</section>



@extends('frontend.layouts.main')
@section('title', 'SolaceRehab - Home')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style>

        /* Google Fonts - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


        .slide-container{
            max-width: 1120px;
            width: 100%;
            padding: 40px 0;
        }
        .slide-content{
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }
        .card{
            border-radius: 25px;
            background-color: #FFF;
        }
        .image-content,
        .card-content{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 14px;
        }
        .image-content{
            position: relative;
            row-gap: 5px;
            padding: 25px 0;
        }
        .overlay{
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: lightgray;
            border-radius: 25px 25px 0 25px;
        }
        .overlay::before,
        .overlay::after{
            content: '';
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            background-color: lightgray;
        }
        .overlay::after{
            border-radius: 0 25px 0 0;
            background-color: #FFF;
        }
        .card-image{
            position: relative;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            background: #FFF;
            padding: 3px;
        }
        .card-image .card-img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid lightgray;
        }
        .name{
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }
        .description{
            font-size: 14px;
            color: #707070;
            text-align: center;
        }
        .button{
            border: none;
            font-size: 16px;
            color: #FFF;
            padding: 8px 16px;
            background-color: lightgray;
            border-radius: 6px;
            margin: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .button:hover{
            background: grey;
        }

        .swiper-navBtn{
            color: black;
            transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
            color: grey;;
        }
        .swiper-navBtn::before,
        .swiper-navBtn::after{
            font-size: 35px;
        }
        .swiper-button-next{
            right: 0;
        }
        .swiper-button-prev{
            left: 0;
        }
        .swiper-pagination-bullet{
            background-color: Grey;
            opacity: 1;
        }
        .swiper-pagination-bullet-active{
            background-color: black;
        }



    </style>

    <main id="main">


        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="">
                <div class="row text-center" >
                    <div class="col-12 text-center mb-6">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                                        <div class="img-bg-inner text-center">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <h6 class="display-6">Bridge Rehab Addiction Ends Here</h6>
                                                    <p>We can solve problems that are beyond your control</p>
                                                </div>
                                            </div>
                                            <form action="{{route('contact')}}">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary" style="size:100px ;">Appointment</button>
                                                </div>
                                            </form>
                                        </div>

                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>Addiction is a Disease</h2>
                                            <p>It starts up as a pleasurable activity and ends up in death. Its Primary, Chronic, Progressive and Potentially Fatal</p>
                                            <form action="{{route('team')}}">
                                                <input type="submit" value="Our Team" />
                                            </form>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide" >
                                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>24/7 Support Services for Indoor Treatment</h2>
                                            <p>Do not hesitate to contact us. Bridge Rehanb provides professional counseling and Psychotherapic services for indoor and outdoor treatment.</p>
                                            <form action="{{route('about')}}">
                                                <input type="submit" value="About us" />
                                            </form>
                                        </div>
                                    </a>
                                </div>
                                {{--              <div class="swiper-slide">--}}
                                {{--                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">--}}
                                {{--                      <div class="img-bg-inner">--}}
                                {{--                          <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>--}}
                                {{--                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>--}}
                                {{--                      </div>--}}
                                {{--                  </a>--}}
                                {{--              </div>--}}
                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======About us ===== -->
        <section>
            <div class="container" data-aos="" >
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">About us</h1>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <a href="#" class="me-4 thumbnail">
                            <img src="{{asset('assets/img/post-landscape-2')}}.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            <div class="post-meta mt-4">About us</div>
                            <h2 class="mb-4 display-4">Company History</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                            <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End ====== About us ===== -->

        <!-- ====== OUR TEAM ====== -->

        <section id="team" class="team mb-5" >
            <div class="container" data-aos="" >
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Our Team</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-1.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-2.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-3.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-4.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-5.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-6.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-1.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-2.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{asset('assets/img/person-3.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                {{--                              <button class="button">View More</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>


        </section>
        <!-- ====== End OUR TEAM ====== -->

        <!-- ====== Reviews ====== -->
        {{--    <section>--}}
        {{--      <div class="col-12 text-center mb-5">--}}
        {{--        <div class="row justify-content-center">--}}
        {{--          <div class="col-lg-6">--}}
        {{--            <h2 class="display-4">REviews</h2>--}}
        {{--            <p>In emergencies each and every second is precious in saving lives and for that reason Bridge Rehab introduces Emergency Response System. In case of emergency related to drug addiction or psychosis. You can call us at.</p>--}}
        {{--            <h3 class="display-4">lorem ipsum</h3>--}}
        {{--          </div>--}}
        {{--        </div>--}}
        {{--      </div>--}}
        {{--    </section>--}}



        <!-- ====== END Reviews  ====== -->

        <!-- ===== Contact Form ===== -->



        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Contact Us</h2>
                            <p> To make an appointment click</p>
                        </div>
                    </div>
                    <form action="contact.html">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="size:100px ;">Contact Us</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section>
            <div class="col-12 text-center mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="display-4">On Emergency</h2>
                        <p>In emergencies each and every second is precious in saving lives and for that reason Bridge Rehab introduces Emergency Response System. In case of emergency related to drug addiction or psychosis. You can call us at.</p>
                        <h3 class="display-4">+92 031 1312312</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Form -->


    </main><!-- End #main -->

    <!-- Swiper JS -->
    <!--Uncomment this line-->


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

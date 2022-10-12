@extends('frontend.layouts.main')
@section('title', 'SolaceRehab - Home')
@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <style>

        /* Google Fonts - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


        .slidercontainer{
            max-width: 100%;
            width: 100%;

        }

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




        @media screen and (max-width: 768px) {
            .slide-content{
                margin: 0 10px;
            }
            .swiper-navBtn{
                display: none;
            }
        }



    /*    Testimonials CSS*/
        .containertestimonial {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: lightgray;
        }
        .testimonial {
            position: relative;
            max-width: 900px;
            width: 100%;
            padding: 50px 0;
            overflow: hidden;
        }
        .testimonial .image {
            height: 170px;
            width: 170px;
            object-fit: cover;
            border-radius: 50%;
        }
        .testimonial .slide {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            row-gap: 30px;
            height: 100%;
            width: 100%;
        }
        .slide p {
            text-align: center;
            padding: 0 160px;
            font-size: 14px;
            font-weight: 400;
            color: #333;
        }
        .slide .quote-icon {
            font-size: 30px;
            color: #4070f4;
        }
        .slide .details {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .details .name {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        .details .job {
            font-size: 12px;
            font-weight: 400;
            color: #333;
        }
        /* swiper button css */
        .nav-btn {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            transform: translateY(30px);
            background-color: rgba(0, 0, 0, 0.1);
            transition: 0.2s;
        }
        .nav-btn:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }
        .nav-btn::after,
        .nav-btn::before {
            font-size: 20px;
            color: #fff;
        }

        @media screen and (max-width: 768px) {
            .slide p {
                padding: 0 20px;
            }
            .nav-btn {
                display: none;
            }
        }

    </style>

  <main id="main">


      <!-- ======= Hero Slider Section ======= -->
          <div class="slidercontainer" data-aos="">
              <div class="row text-center" >
                  <div class="col-12 text-center mb-6">
                      <div class="swiper sliderFeaturedPosts">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                                      <div class="img-bg-inner">
                                                  <h2> Bridge Rehab Addiction Ends Here</h2>
                                                  <p>We can solve problems that are beyond your control</p>
                                          <form action="{{route('contact')}}">
                                              <button type="button" class="btn btn-secondary"> Appointment</button>
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
                                              <button type="button" class="btn btn-secondary">Our Team</button>
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
                                              <button type="button" class="btn btn-secondary">About Us</button>
                                          </form>
                                      </div>
                                  </a>
                              </div>
                                            <!-- <div class="swiper-slide">
                                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                                                    <div class="img-bg-inner">
                                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                                    </div>
                                                </a>
                                            </div> -->
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


    <!-- ======About us ===== -->
    <section>
      <div class="container" data-aos="" >
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
              <h2 class="display-4">About Us</h2>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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

                                                            <button class="button">View More</button>
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




      <!-- ====== Testimonials ====== -->

          <div class="container" data-aos="" >
              <div class="row">
                  <div class="col-12 text-center mb-5">
                      <div class="row justify-content-center">
                          <div class="col-lg-6">
                              <h2 class="display-4">Testimonials</h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      <section class="containertestimonial">
          <div class="testimonial mySwiper">
              <div class="testi-content swiper-wrapper">
                  <div class="slide swiper-slide">
                      <img src="{{asset('assets/img/person-1.jpg')}}"  alt="" class="image" />
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                          saepe provident dolorem a quaerat quo error facere nihil deleniti
                          eligendi ipsum adipisci, fugit, architecto amet asperiores
                          doloremque deserunt eum nemo.
                      </p>

                      <i class="bx bxs-quote-alt-left quote-icon"></i>

                      <div class="details">
                          <span class="name">Marnie Lotter</span>
                          <span class="job">Web Developer</span>
                      </div>
                  </div>
                  <div class="slide swiper-slide">
                      <img src="{{asset('assets/img/person-2.jpg')}}"  alt="" class="image" />
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                          saepe provident dolorem a quaerat quo error facere nihil deleniti
                          eligendi ipsum adipisci, fugit, architecto amet asperiores
                          doloremque deserunt eum nemo.
                      </p>

                      <i class="bx bxs-quote-alt-left quote-icon"></i>

                      <div class="details">
                          <span class="name">Marnie Lotter</span>
                          <span class="job">Web Developer</span>
                      </div>
                  </div>
                  <div class="slide swiper-slide">
                      <img src="{{asset('assets/img/person-3.jpg')}}"  alt="" class="image" />
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                          saepe provident dolorem a quaerat quo error facere nihil deleniti
                          eligendi ipsum adipisci, fugit, architecto amet asperiores
                          doloremque deserunt eum nemo.
                      </p>

                      <i class="bx bxs-quote-alt-left quote-icon"></i>

                      <div class="details">
                          <span class="name">Marnie Lotter</span>
                          <span class="job">Web Developer</span>
                      </div>
                  </div>
              </div>
              <div class="swiper-button-next nav-btn"></div>
              <div class="swiper-button-prev nav-btn"></div>
              <div class="swiper-pagination"></div>
          </div>
      </section>



      <!-- ====== END Reviews  ====== -->

    <!-- ===== Contact Form ===== -->

    <section style="margin: auto">
       <div class=" text-center " style="padding: inherit">
           <div class="row justify-content-center">
            <div class="col-lg-3 text-center">

                <h2 class="display-4">Contact</h2>

                <div>
                    <p >We are always here to make lives better</p>
                    <a href="{{route('contact')}}" class="btn btn-primary">Make an Appointment</a>
                </div>
            </div>
          </div>
        </div>
    </section>

{{--    <section>--}}
{{--      <div class="col-12 text-center mb-5">--}}
{{--        <div class="row justify-content-center">--}}
{{--          <div class="col-lg-6">--}}
{{--            <h2 class="display-4">On Emergency</h2>--}}
{{--            <p>In emergencies each and every second is precious in saving lives and for that reason Bridge Rehab introduces Emergency Response System. In case of emergency related to drug addiction or psychosis. You can call us at.</p>--}}
{{--            <h3 class="display-4">+92 031 1312312</h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </section>--}}
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

        var swipertest = new Swiper(".mySwiper", {
            slidesPerView: 1,
            grabCursor: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
@endsection

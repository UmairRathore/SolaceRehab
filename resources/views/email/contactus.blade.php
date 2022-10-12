@extends('frontend.layouts.main')
@section('title', 'SolaceRehab - About')
@section('content')


    <style>
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <main id="main">
        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="">

                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Contact us</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="info-item">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <a href="https://www.google.fr/maps/place/Solace+Rehab+-+Addiction+Treatment+Center/@31.4585407,74.2747938,17z/data=!3m1!4b1!4m5!3m4!1s0x391901eb612c7fa7:0x2102694a53e1094f!8m2!3d31.4585361!4d74.2769878">Solace Rehab, House# 14, Block R Phase 2 Johar Town, Lahore, Punjab 54600, Pakistan</a>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item info-item-borders">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p>
                                <a href="https://api.whatsapp.com/send?phone=923154462426">+92 315 4462426</a>
                            </p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">contactusr22@gmail.com</a></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <!-- begin row -->




                        <div class="form mt-5">

                            <form method="POST" action="{{ route('contactus') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="alert-hide">
                                @if(Session::has('success'))

                                    <div class="alert @if(Session::has('success')) {!! session('success') !!} @endif  alert-secondary" role="alert">
                                        <button id="cross" type="button" class="close"   data-dismiss="alert-bg" aria-hidden="true">×</button>
                                        {!! session('success') !!}
                                    </div>
                                @endif
                                    @if(Session::has('warning'))

                                        <div class="alert @if(Session::has('warning')) {!! session('warning') !!} @endif  alert-warning" role="alert">
                                            <button id="cross" type="button" class="close"   data-dismiss="alert-bg" aria-hidden="true">×</button>
                                            {!! session('warning') !!}
                                        </div>
                                    @endif

                                </div>
                                <div class="row" >
                                    <div class="form-group col-md-6">
                                        {{--<label for="phone">Phone</label>--}}
                                        <div class="input-group">
                                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Your Name">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6" >
                                        {{-- <label for="subject">subject</label>--}}
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Your Email Address">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row" >
                                    <div class="form-group col-md-6">
{{--                                        <label for="phone">Phone</label>--}}
                                        <div class="input-group">
                                            <input type="tel" name="phone" class="form-control  @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Your Phone Number">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col mb-3" >
{{--                                        <label for="subject">subject</label>--}}
                                        <div class="input-group">
                                            <input type="text" name="subject" class="form-control  @error('subject') is-invalid @enderror" value="{{old('subject')}}" placeholder="Subject">
                                            @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                <div class="form-group">
{{--                                    <label for="message">Message</label>--}}
                                    <div class="input-group">
                                        <textarea class="form-control @error('messages') is-invalid @enderror"  style="height:150px" name="messages" placeholder="Type messages">{{ old('messages') }}</textarea>
                                        @error('messages')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
{{--<div class="alert-hide">--}}
{{--    @if(Session::has('warning'))--}}

{{--        <div class="alert @if(Session::has('warning')) {!! session('warning') !!} @endif  alert-warning" role="alert">--}}
{{--            <button id="cross" type="button" class="close"   data-dismiss="alert-bg" aria-hidden="true">×</button>--}}
{{--            {!! session('warning') !!}--}}
{{--        </div>--}}
{{--    @endif--}}
                        </div>
                        </div><!-- End Contact Form -->

                    </div>

        </section>


        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="85%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=400&amp;hl=en&amp;q=solace rehab&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

                </iframe></div><style>.mapouter{position:center;text-align:center;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

    </main><!-- End #main -->

        <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#cross").click(function(){
                $(".alert-hide").hide();
            });
            setTimeout(function(){

                $(".alert-hide").fadeOut("slow")

            }, 6000);
        });


    </script>

@endsection



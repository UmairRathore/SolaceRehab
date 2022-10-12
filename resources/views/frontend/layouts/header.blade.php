
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo.jpg')}}" alt="">
        <!-- <h1>Solace Rehab</h1> -->
      </a>

{{--      <nav id="navbar" class="navbar">--}}
{{--        <ul>--}}
{{--          <li><a href="{{route('index')}}">Home</a></li>--}}
{{--          <li><a href="{{route('about')}}">About</a></li>--}}
{{--          <li><a href="{{route('gallery')}}">Gallery</a></li>--}}
{{--          <li><a href="{{route('contact')}}">Contact</a></li>--}}
{{--          <li><a href="{{route('team')}}">Our Team</a></li>--}}
{{--        </ul>--}}
{{--      </nav><!-- .navbar -->--}}
        <div class="position-relative">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('addiction')}}">Addiction</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('team')}}">Our Team</a></li>
                </ul>
            </nav><!-- .navbar -->
{{--        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>--}}
{{--        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>--}}
{{--        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>--}}

{{--        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>--}}
        <i class="bi bi-list mobile-nav-toggle"></i>

      </div>

    </div>

  </header><!-- End Header -->

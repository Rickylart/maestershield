<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light">
        <a href="{{ route('index') }}">
            <img src="{{ asset('assets/img/logo.png') }}" width="100" height="200" alt="" srcset="">
            {{-- <span>MaesterShield</span> --}}
        </a>
        </h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class=""><a href="{{ route('index') }}">Home</a></li>
          <li class=""><a href="{{ route('about') }}">About Us</a></li>
          {{-- <li><a href="{{ route('services') }}">Services</a></li> --}}
          <li class=""><a href="{{ route('brainchild') }}">Brainchild Project</a></li>
          <li class=""><a href="{{ route('team') }}">Team</a></li>
          <li class=""><a href="{{ route('gallery') }}">Gallery</a></li>
          <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

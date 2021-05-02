<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="{{ route('index') }}"><span>MaesterShield</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="{{ Request::is(url('/index')) ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
          <li class="{{(request()->is('/about')) ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
          {{-- <li><a href="{{ route('services') }}">Services</a></li> --}}
          <li class="{{ Request::is(url('127.0.0.1:8000/brainchild')) ? 'active' : '' }}"><a href="{{ route('brainchild') }}">Brainchild Project</a></li>
          <li class="{{ (request()->is('/team')) ? 'active' : '' }}"><a href="{{ route('team') }}">Team</a></li>
          <li class="{{ (request()->is('/gallery')) ? 'active' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
          <li class="{{ (request()->is('/contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

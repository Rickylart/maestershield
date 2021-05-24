@extends('layouts.main')
@section('title','Team')
@section('content')
    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Team</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/1.jpeg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>EDDIE LYON OFEI</h4>
                <span>CHIEF EXECUTIVE OFFICER </span>
                <p><a href="{{ route('eddie') }}">Read Profile</a></p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/2.jpeg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>SANDRA OFOSU AMPOFO</h4>
                <span>CHIEF OPERATING OFFICER</span>
                <p><a href="{{ route('sandra') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/3.jpeg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ERNEST FRANCISCO TETTEH DOKU</h4>
                <span>EXECUTIVE SECRETARY</span>
                <p><a href="{{ route('ernest') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/4.jpeg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>VALERIE AKU ELI</h4>
                <span>CHIEF FINANCIAL OFFICER</span>
                <p><a href="{{ route('valerie') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/17.jpg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                    <a href="https://twitter.com/_larteyrick?s=09" target="_blank"><i class="icofont-twitter"></i></a>
                    <a href="https://www.facebook.com/wiz.d.rick" target="_blank"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/invites/contact/?i=1pldpxgel41gx&utm_content=657c45" target="_blank"><i class="icofont-instagram"></i></a>
                  <a href="" target="_blank"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>EARL ANKRAH</h4>
                <span>EXECUTIVE DIRECTOR OF COMMUNICATION</span>
                <p><a href="{{ route('earl') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/7.jpg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                    <a href="https://twitter.com/_larteyrick?s=09" target="_blank"><i class="icofont-twitter"></i></a>
                    <a href="https://www.facebook.com/wiz.d.rick" target="_blank"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/invites/contact/?i=1pldpxgel41gx&utm_content=657c45" target="_blank"><i class="icofont-instagram"></i></a>
                  <a href="" target="_blank"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>FRANCIS RICK LARTEY</h4>
                <span>INFORMATION TECHNOLOGY EXECUTIVE</span>
                <p><a href="{{ route('francisrick') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/8.jpeg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>KINGSLEY OWUSU YEBOAH </h4>
                <span>HEAD OF ADMINISTRATION</span>
                <p><a href="{{ route('owusu') }}">Read Profile</a></p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/11.jpg') }}" style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ISAAC KWAKU NYARKO</h4>
                <span>AUTOMOTIVE MECHANICAL INSPECTOR</span>
                <p><a href="{{ route('isaac') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/13.jpeg') }}"  style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>GARDNER KWAME AMOAH</h4>
                <span>CHIEF MARKETING OFFICER</span>
                <p><a href="{{ route('amoah') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/12.jpeg') }}"  style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>DANIEL KWANZA ANDERSON</h4>
                <span>GRAPHIC DESIGNER & DIGITAL MARKETER</span>
                <p><a href="{{ route('daniel') }}">Read Profile</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/14.jpeg') }}"  style="height: 20rem" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>CHARLES NIFAH-BIMPONG</h4>
                <span>LOGISTICS MANAGER</span>
                <p><a href="{{ route('charles') }}">Read Profile</a></p>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Team Section -->

@endsection

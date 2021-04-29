@extends('layouts.main')
@section('title','About')
@section('content')
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About The Company</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

     <!-- ======= Service Details Section ======= -->
     <section class="service-details">
        <div class="container">

          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-1.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">Our Mission</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-2.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">Our Plan</a></h5>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-3.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">Our Vision</a></h5>
                  <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-4.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">Our Care</a></h5>
                  <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Service Details Section -->
@endsection

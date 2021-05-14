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
            <img src="{{ asset('assets/img/index.jpg') }}" style="height: 38rem" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Maester Shield Ltd. </h3>
            <p>Is an Enterprise Development Company in Ghana established in 2018 bringing it's expertise to various areas of business.</p>
            <p>With the help of it's diversed and experienced team, Maester Shield Ltd. seeks to identify business opportunities and find the best means of capitalizing those oportunities with the aim creating value and improving the living standard of Africans whilst providing reasonable returns for all our investors.</p>

            <p>We Operate in several areas of business such as Real Estate, Tourism, Transportation and Cargo, Agro-business, Mining, Hospitality and Management etc. </p>

            <div class="row">
                <div class="col-md-6">
                    <p class="font-italic">
                      <h4>Core Values</h4>
                      </p>
                      <ul>
                        <li><i class="icofont-check-circled"></i>Creativity</li>
                        <li><i class="icofont-check-circled"></i> Value Creation</li>
                        <li><i class="icofont-check-circled"></i> Excellence</li>
                        <li><i class="icofont-check-circled"></i>Intergrity</li>
                        <li><i class="icofont-check-circled"></i> Competence</li>
                        <li><i class="icofont-check-circled"></i> Accountability</li>
                      </ul>
                  </div>

                  <div class="col-md-6">
                    <p class="font-italic">
                       <h4>Key Strategies</h4>
                      </p>
                      <ul>
                        <li><i class=""></i>Strategic alliance and partnership</li>
                        <li><i class=""></i> Cost effectiveness</li>
                        <li><i class=""></i> Technology and information management</li>
                        <li><i class=""></i> Operational improvement</li>
                      </ul>
                  </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    {{-- <section class="facts section-bg" data-aos="fade-up">
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
    </section> --}}
    <!-- End Facts Section -->

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
                  <h5 class="card-title"><a href="#">BUSINESS OVERVIEW</a></h5>
                  <p class="card-text">The Dondo Facility which is the brainchild of MAESTER SHEILD LTD. would be located at Opeibea behind Alliance Francaise d’ Accra. It would be a new state of the art facility, which would mainly embody a luxurious Dondo Hotel, an ultra-modern multi-purpose Auditorium and a Shopping Mall. The Dondo facility would be the first of its kind in the history of Ghana and West Africa.</p>
                  {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-2.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">OUR SERVICES</a></h5>
                  <p class="card-text">The Dondo Hotel is to be a classy and fabulous hotel with 240 exquisite rooms, high class furniture with modern technology, offering exclusive  hotel services such as; daily room cleaning, daily laundry services,  60 capacity conference room, Airport shuttle, sauna rooms, smoking areas, personal grooming, Jacuzzi, free WIFI, a helicopter service from a helipad and many more modern services that will delight the customer.</p>
                  <div class="read-more"><a href="{{ route('dondo') }}" style="color: #D4AF37"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-3.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">CUSTOMER FOCUS</a></h5>
                  <p class="card-text">The Dondo hotel will primarily serve customers who seek comfort, ultra-modern amenities,adequate car parking space in and underground car parking lots, high level of security at an enviable price and above all, comfort like never before seen in the hospitality industry in Africa.</p>
                  {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/service-details-4.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">SUCCESS FACTORS</a></h5>
                  <p class="card-text">Maester Shield Ltd is uniquely positioned to succeed due to the following reasons;</p>
                  <ul>
                      <li>Our location is central to the downtown, Airport and the corporate districts of the city making it the ideal spot for relaxation, comfort and luxury.</li>
                  </ul>
                  {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Service Details Section -->
@endsection

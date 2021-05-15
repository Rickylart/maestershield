@extends('layouts.main')
@section('title','Dondo Project')
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>The Dondo Project</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>The Dondo Project</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

   <!-- ======= Features Section ======= -->
   <section class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#D4AF37">The Dondo Project</h2>
        {{-- <p>Below are the servies and products we offer to the general public</p> --}}
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/dudo.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          {{-- <h3>Dondo Hotel</h3> --}}
          <p class="font-italic">
            The Project is a new brainchild state of the art facility that is proposed to be located at Alliance Francaise,Airport Residential, in the capital city of Ghana-Accra.
              It will include :
          </p>
          <div class="row">
              <div class="col-md-6">
                  <ul>
                      <li><i class="icofont-check"></i>An ultra-modern multi-purpose Auditorium</li>
                      <li><i class="icofont-check"></i> A Shopping Mall</li>
                      <li><i class="icofont-check"></i>240 Exquisite hotel rooms</li>
                    </ul>
              </div>

              <div class="col-md-6">
                  <ul>
                      <li><i class="icofont-check"></i>64 Capacity conference room</li>
                      <li><i class="icofont-check"></i>Airport shuttle</li>
                      <li><i class="icofont-check"></i>A helicopter service from a helipad and many more</li>
                    </ul>
              </div>

          </div>
          <p class="font-italic">
              The Dondo facility will be the first of it's kind in the history of Ghana.
          </p>
          <a href="{{ asset('assets/document/Dondo.pdf') }}" download>Download PDF to know more</a>
        </div>
      </div>

      {{-- <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/dudo.jpeg') }}" class="img-fluid" alt="">
        </div> --}}
        <div class="col-md-12 pt-4">
          <h3 style="color:#D4AF37">The Dondo </h3>
          <p class="font-italic">
            The Dondo is a name of an indigenous armpit talking drum which has its origins traced all the way back to the Gana Empire (Now Ghana), which is located in the Western part of the African continent. Prior to it's usage, it was believed to have first, been designed by a young drummer who had gotten the inspiration of making a two headed drum, sealed by animal skin and connected to each other with stretched cords joining the two heads and pulling them tightly to impress his younger brother, with the two heads being beaten.
          </p>
          <p class="font-italic">
            This significant drum design kept changing the tones when placed in the armpit. It played whiles ones arm thus tightening  and losing the connecting cords joining the two drum heads. Surprisingly, the tones produced by these 2 drum heads sounded very much like their spoken language and then they realized that, messages could be easily understood and passed on to each other by the way the drums were played. Soon afterwards, many more of these drums where produced and they came into common usage by being incorporated into their music making
          </p>
          <p class="font-italic">
            Following the fall of the Gana Empire (now Ghana) and European colonization of West Africa, some of the West African countries adopted and continue to use the Dondo drums for several purposes, such as the transmission of  messages during the performance of various customary rites; during Durbars; funerals;  marriages; etc
            In Ghana today,the Dondo talking drums,are still being made and are mostly finished by adorning them with the Kente or Fugu cloths.
          </p>
          {{-- <div class="row">
              <div class="col-md-6">
                  <ul>
                      <li><i class="icofont-check"></i>An ultra-modern multi-purpose Auditorium</li>
                      <li><i class="icofont-check"></i> A Shopping Mall</li>
                      <li><i class="icofont-check"></i>240 esquisite hotel rooms</li>
                    </ul>
              </div>

              <div class="col-md-6">
                  <ul>
                      <li><i class="icofont-check"></i>64 Capacity conference room</li>
                      <li><i class="icofont-check"></i>Airport shuttle</li>
                      <li><i class="icofont-check"></i>A helicopter service from a helipad and many more</li>
                    </ul>
              </div>

          </div>
          <p class="font-italic">
              The Dondo facility will be the first of it kind in the history of Ghana.
          </p> --}}
        </div>
      </div>

      {{-- <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="{{ asset('assets/img/aud.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Greatest Auditorium in all West Africa</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/mall.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
          <h3>MaesterShield Mall will blow your mind</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
          </ul>
        </div>
      </div> --}}

    </div>
  </section><!-- End Features Section -->
@endsection

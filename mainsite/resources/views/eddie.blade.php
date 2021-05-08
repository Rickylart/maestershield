@extends('layouts.main')
@section('title',"Eddie's Profile")
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team Member Profile</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Eddie's Plrofiule</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

   <!-- ======= Features Section ======= -->
   <section class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#D4AF37">EEDIE LYON OFEI</h2>
        {{-- <p>Below are the servies and products we offer to the general public</p> --}}
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/1.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3 style="color:#D4AF37">CHIEF EXECUTIVE OFFICER </h3>
          <p class="font-italic">
            Eddie Lyon Ofei is the founder, chairman and Ceo of Maester Shield Ltd, which was founded in May 2017. Eddie is an astute seasoned business  executive with 13 years of  corporate experience and holds a Diploma in Land and Estate managements, planing and marketing.
          </p>
          <p class="font-italic">
            He is keen responsible for setting the overall directions, product, service and elite innovations strategies for the company to become a global organisation, that will effectively utilize resources both in Ghana and overseas.
          </p>

          <p class="font-italic">
            Before the birth of Maester Shield Ltd, He was with Perfect Care Company  Ltd. A Ghana - Indian based company where he served as a sales representative for a year. Eddie strives for excellence in all his professional  endeavors and was later promoted accordingly due to his marvelous achievements and contributions to serve in the office as the Executive Director of the Real Estate department from 2002 - 2016.
          </p>

          <p class="font-italic">
            Eddie is a distinguished ethical team player and has always find marvelous excitements in making the world green again and loved by all he encounters. He has a penchant for exclusive architecture designs and ancient buildings and has also guided and grant exquisite ideas for the construction of some ideal facilities here in Ghana. Eddie began his career by studying Visual Art at Ghana Armed Forces Technical School and ever since gone through various institutions and has always believed that; Knowing thyself is the key to greater works.
          </p>


        </div>
      </div>

       {{-- <div class="row" data-aos="fade-up">
       <div class="col-md-5">
          <img src="{{ asset('assets/img/dudo.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-12 pt-4">
          <h3 style="color:#D4AF37"> CHIEF EXECUTIVE OFFICER </h3>
          <p class="font-italic">
            Is a name of an indigenous armpit talking drum which has its origins traced all the way back to the Ghana Empire and which was located in Western part of the African continent.
            Prior it's usage, it was believed to have first been designed by a young drummer who had gotten the inspiration of making a two headed drums, sealed by animal skin and
            connected to each other with stretched cords joining the two heads and pulling them tightly to impress his younger brother, with the two heads being beaten.
          </p>
          <p class="font-italic">
            These significant drum design kept changing the tones when placed in the armpit and played whiles ones arm thus tightening
             and losing the connecting cords joining the two drum heads. Surprisingly, the tones thus produced sounded very much like their spoken language
             and they realized that messages that could be  easily understood could be passed on to each other by in which the drums was played. Soon afterwards therefore,
             many more of these drums where produced and came into common usage by being incorporated into their music making. Following the fall of the Ghana Empire, and
             European colonization of Wast Africa, some of the West African countries adopted and continue to use the Dondo drums for several purposes, such as the transmission of  messages;
            during the performance of various customary rites; during Durbars; funerals;  marriages; etc
          </p>
          <p class="font-italic">
            In Ghana today,the Dondo talking drums,are still been made and are mostly finished by adorning them with the Kente or Fugu cloths.
          </p>
          <div class="row">
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
          </p>
        </div>
      </div> --}}

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

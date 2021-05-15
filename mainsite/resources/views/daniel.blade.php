@extends('layouts.main')
@section('title',"Daniel's Profile")
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team Member Profile</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Daniel's Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

   <!-- ======= Features Section ======= -->
   <section class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#D4AF37">DANIEL KWANZA ANDERSON</h2>
        {{-- <p>Below are the servies and products we offer to the general public</p> --}}
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/12.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3 style="color:#D4AF37">GRAPHIC DESIGNER & DIGITAL MARKETER </h3>
          <p class="font-italic">
            Daniel Kwanza Anderson is a professional digital marketer and a Graphic designer in branding and content creation expect.
            He has a distinctive recognition mark in his creations and always ready to learn and accept new challenges.
            Prior to Maester Shield Ltd, he was an employee of the Nurses Training College-Pantang where he achieved marvelous exposures over the period and held key responsibilities such as ;
            Assistance with I.T Tuition, I.T Lab Technician etc.
          </p>
          <p class="font-italic">
            He has been in the Graphic  design field since 2017 till date. </p>

          <p class="font-italic">
         Danny as preferable called, joined Maester Shield Ltd in 2020 and currently serve in the company as the Digital Marketing Executive. He brought on deck an exceptional excellent skill and knowledge in Graphic Design, Motion Graphics and Video Editing software such as Photoshop, illustrator, Adobe after effects, Adobe premiere pro and Microsoft application ( word, excel, PowerPoint etc). He hold an HND in computer science from Accra Technical University. </p>

       {{--    <p class="font-italic">
            Sir Francisco is an accommodating approachable, loving and caring father figure to all and blessed with four lovely children, two men and two women. One of who in the USA, two in the United Kingdom, and the eldest in Ghana.
          </p> --}}


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

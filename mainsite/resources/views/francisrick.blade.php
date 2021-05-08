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
            <li>Rick's Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

   <!-- ======= Features Section ======= -->
   <section class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#D4AF37">FRANCIS RICK LARTEY</h2>
        {{-- <p>Below are the servies and products we offer to the general public</p> --}}
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/7.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3 style="color:#D4AF37">INFORMATION TECHNOLOGY EXECUTIVE </h3>
          <p class="font-italic">
            Francis Rick Lartey joined Maester Shield Ltd. In January 2020 as an IT Personal. He is a Software / Application developer both Web and Mobile. He loved to be called Rick and speaks fluent English with outstanding Ghanaian local languages as Ga and Twi. Rick is a church boy and really like what he does with great anxiety and he is well known product of  Accra Technical University and graduated with a Higher National Diploma / HND in Computer Science.
          </p>
          <p class="font-italic">
            Due to his engorged love for Computer Programming, He always build Web and Mobile apps and render IT services like domain names with hosting to the general public. He is a great team player and has contributed massively to some outstanding software and application programs for Vodafone Ghana Limited and has more than four years of professional experiences in computer programming due to the various institutions he has worked with over the years. He was an application developer at Vodafone Ghana Limited and currently now with Maester Shield Ltd.
          </p>

          {{-- <p class="font-italic">
            Sir Francisco, has marvelous ace of love for all kinds of sports especially Football, Long and table tennis, Boxing and formula 1 car racing. He speaks fluent Hausa and Yeruba having been born in Kanu, Northern Nigeria to Ghanaian parents who where then leaving there.He also speaks fluent Ewe, Twi, Ga and English. He was one of the earlier students of Wesley Grammar School - Accra in the 70’s; did his six form in Bishop Herman College- Kpando in the Volta Region; enlisted in the Ghana Army for Officer training ,but was prevailed by his parents to be realized because of the then series of Military coup in Ghana and Africa. He then enrolled in the University of Ghana Law School and graduated distinctively with LLB and CL(Counselor at Law). He later also attained a post graduate diploma and a master of Social Sciences Degree from the Institute of Social Studies (ISS) , Denhaag - Netherlands.
          </p>

          <p class="font-italic">
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

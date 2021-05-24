@extends('layouts.main')
@section('title',"Earl's Profile")
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team Member Profile</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Earl's Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

   <!-- ======= Features Section ======= -->
   <section class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#D4AF37">EARL ANKRAH</h2>
        {{-- <p>Below are the servies and products we offer to the general public</p> --}}
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="{{ asset('assets/img/17.jpg') }}" style="height: 40rem" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3 style="color:#D4AF37">EXECUTIVE DIRECTOR OF COMMUNICATION</h3>
          <p class="font-italic">
            Earl Ankrah is the Executive Director of Communication for Maester Shield Limited, overseeing the company's talent, development, strategies,equity, diversity,culture and employment. In his essential role, which he held since 2019.

            Earl and his astounding team are always focused on creating a warm environment where employees can thrive and equip the company's success. </p>

          <p class="font-italic">
            Earl is a proud product of Accra Academy after which he was enrolled to the Ghana Institute of Journalism both located in Accra, Ghana.
            In his amazing earlier career as a journalist, he was a pioneer of a breakfast television show which he was the originator and main host aired on the most patronized television station known as GTV of the Ghana Broadcasting Corporation in the 90’s.
            Also in his early days, he has granted some of the most spectacular interviews in Ghana and African, such as; interviews with the former president of Ghana John Kuffour, the then Minister of Communications, the vice president John Dramani Mahama and some outstanding top-level politicians including Ministers of State, Members of Parliament, Ambassadors, High Commissioners and Deplomats.
             As well as interviews on the African's Continent with Lucky Dube- RIP, Dibango, Meiway, Youssor Ndour, Osibisa, Arrow( South American Calypso Legend ), Godfrey Moloy-RIP( God father of Soweto), National football players and Coaches ( Black Star), Miss Ghana, Miss Universe Ghana and Miss Malaika pageants and winners from all over the world. Earl, also was nominated and won five awesome awards from 1997-2002.
            Following his appointment to the Fair Wages and Salaries Commission as the head of Public Affairs, he then petered out from the media space.
        </p>

          <p class="font-italic">
            Earl has a Diploma in journalism ( Ghana Institute of Journalism), Then The Graduate School of Management( UK and Accra campuses) where he took a graduate course in Public Relations and also with the National Institute for Labour Economics Research and Development, New Delhi.</p>


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

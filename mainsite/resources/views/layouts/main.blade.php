<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
@livewireStyles
<body>

  @include('layouts.navbar')

  <main id="main">
  @yield('content')
</main><!-- End #main -->

  @include('layouts.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('layouts.script')
  @livewireScripts
</body>

</html>

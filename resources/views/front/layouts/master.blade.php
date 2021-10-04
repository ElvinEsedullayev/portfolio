<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','Anasayfa')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('front\layouts\partials\head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('front\layouts\partials\menu')

       <!-- ======= Hero Section ======= -->
       @if(!Route::is('blog.detail'))
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>Men <span class="typed" data-typed-items="{{$user->name. ' '. $user->surname}}"></span></h1>
        <p>{{$user->specialty}}</p>

        <ul class="list-unstyled list-social">
          @foreach($socials as $social)
          <li><a href="{{$social->link}}" target="_blank"><i class="bi bi-{{$social->name}}"></i></a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->
@endif

  <main id="main">

  @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
       
        </ul>

      </div>

      <p>&copy; Müəllif hüquqları Folio. Bütün hüquqlar qorunur.</p>

      <div class="credits">
     
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('front\layouts\partials\footer')

</body>

</html>
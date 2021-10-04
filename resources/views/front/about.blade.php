@extends('front\layouts\master')
@section('title','Home')
@section('content')
       <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="{{asset('front')}}/assets/img/men.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">{{$user->specialty}} </p>
              <p class="separator">{{$user->about}}</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->
    {{--
    <div id="services">
      <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-briefcase"></i>
                <span>UI/UX DESIGN</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-card-checklist"></i>
                <span>BRAND IDENTITY</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-bar-chart"></i>
                <span>WEB DESIGN</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-binoculars"></i>
                <span>MOBILE APPS</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-brightness-high"></i>
                <span>Analytics</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-calendar4-week"></i>
                <span>PHOTOGRAPHY</span>
                <p class="separator">To an English person, it will seem like simplified English,told me what </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->
    --}}
@endsection

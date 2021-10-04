@extends('front\layouts\master')
@section('title','Home')
@section('content')
   <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach($portfolies as $port)
              <li data-filter=".filter-{{$port->kind}}">{{$port->kind}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($portfolies as $port)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('uploads/portfolio/'.$port->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$port->name}}</h4>
              <p>{{$port->kind}}</p>
              <a href="{{asset('uploads/portfolio/'.$port->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$port->kind}}"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach
 

 

     

       

          

        </div>

      </div>

    </div><!-- End Portfolio Section -->
      
@endsection
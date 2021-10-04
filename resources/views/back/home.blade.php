@extends('back\layouts\master')
@section('title','Anasayfa')
@section('content')
@include('back\layouts\partials\alert')
       <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.blog')}}">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-blogger"></i></span>
              
              <div class="info-box-content">
                
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number">
                  
                  <small>{{count($blog)}} eded</small>
                </span>
               
              </div>
               
            </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.portfolio')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-photo-video"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Portfolio</span>
                <span class="info-box-number">{{count($portfolio)}} eded</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.social')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-poll text"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Social</span>
                <span class="info-box-number">{{count($social)}} eded</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
             <a href="{{route('yonetim.user')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">{{count($user)}} eded</span>
              </div>
              <!-- /.info-box-content -->
            </div>
             </a>
          </div>
          <!-- /.col -->
        </div>
@endsection()
@section('footer')

@endsection
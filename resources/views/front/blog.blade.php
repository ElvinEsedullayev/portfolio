@extends('front\layouts\master')
@section('title','Home')
@section('content')
   <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>journal</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="{{route('blog.detail',$blog->id)}}"><img src="{{asset('uploads/blogs/'.$blog->image)}}" height="300" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="{{route('blog.detail',$blog->id)}}">{{$blog->blog_name}}</a></h4>
                  <p class="separator">{{$blog->author}}
                  </p>

                </div>

              </div>
            </div>

            @endforeach

       

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->
      
@endsection
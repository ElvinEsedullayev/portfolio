@extends('front\layouts\master')
@section('title','Home')
@section('content')
    <div class="main-content paddsection">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <div class="container-main single-main">
                <div class="col-md-12">
                  <div class="block-main mb-30">
                    <img src="{{asset('uploads/blogs/'.$blog->image)}}" width="800" height="600" class="img-responsive" alt="reviews2">
                    <div class="content-main single-post padDiv">
                      <div class="journal-txt">
                        <h4><a href="#">{{$blog->blog_name}}</a></h4>
                      </div>
                      <div class="post-meta">
                        <ul class="list-unstyled mb-0">
                          <li class="author">by:<a href="#">{{$blog->author}}</a></li>
                          <li class="date">date:<a href="#">{{$blog->date}}</a></li>
                       
                        </ul>
                      </div>
                      <p class="mb-30">{!! $blog->about !!}</p>
            
                      <blockquote>Hələ də həyatınızı dəyişəcək birini axtarırsınızsa, güzgüyə baxın.</blockquote>
                     
                    </div>
                  </div>
                </div>





              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Single -->

      
@endsection
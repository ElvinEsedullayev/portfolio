@extends('back\layouts\master')
@section('title','Portfolio Update')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portfolio Form</h3>
                <a href="{{route('yonetim.portfolio')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('updated.portfolio',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Project Name</label>
                    <input type="text" class="form-control" id="" placeholder="Project Name" name="name" value="{{old('project_name',$portfolio->name)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Kind</label>
                    <input type="text" class="form-control" id="" placeholder="Kind" name="kind" value="{{old('kind',$portfolio->kind)}}">
                  </div>
                  <div class="form-group">                  
                    @if($portfolio->image != null)
                    <img src="{{asset('uploads/portfolio/'.$portfolio->image)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
                    @endif
                    <label for="exampleInputFile">Yuklu Sekil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
              </form>
            </div>
@endsection
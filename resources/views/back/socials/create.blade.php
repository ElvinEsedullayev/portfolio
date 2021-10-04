@extends('back\layouts\master')
@section('title','User Create')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Social Form</h3>
                <a href="{{route('yonetim.social')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('created.social')}}" method="POST">
                   @include('back\layouts\partials\errors')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name">
                  </div>
                  <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" class="form-control" id="" placeholder="Link" name="link">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection

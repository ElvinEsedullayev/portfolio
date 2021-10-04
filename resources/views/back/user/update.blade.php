@extends('back\layouts\master')
@section('title','User Update')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{asset('back')}}/plugins/simplemde/simplemde.min.css">
  @endsection
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Update Form</h3>
                <a href="{{route('yonetim.user')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('updated.user',$user->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                @csrf
             @include('back\layouts\partials\alert')
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name" value="{{old('name',$user->name)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Soyad</label>
                    <input type="text" class="form-control" id="" placeholder="Soyad" name="surname" value="{{old('surname',$user->surname)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" id="" placeholder="Enter email" name="email" value="{{old('email',$user->email)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" placeholder="Password" name="password" value="{{old('password',$user->password)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Ixtisas</label>
                    <input type="text" class="form-control" id="" placeholder="Ixtisas" name="specialty" value="{{old('specialty',$user->specialty)}}">
                  </div>
                <div class="form-group">
                    <label for="">Adres</label>
                    <input type="text" class="form-control" id="" placeholder="Adres" name="adres" value="{{old('adres',$user->adres)}}">
                  </div>
                    <div class="form-group">
                    <label for="">Olke ve Seher</label>
                    <input type="text" class="form-control" id="" placeholder="Olke ve Seher" name="country_city" value="{{old('country_city',$user->country_city)}}">
                  </div>
                <div class="form-group">
                  <label>Telefon</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="mobile" value="{{old('mobile',$user->mobile)}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                </div>

                  <div class="form-group">
                    @if($user->image != null)
                    <img src="{{asset('uploads/users/'.$user->image)}}" width="100" height="100" alt="" class="mb-3">
                    @endif
                    <label for="exampleInputFile">Sekil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="form-group">
                   <div class="card-body">
              <textarea id="summernote" name="about" class="form-control">{{old('about',$user->about)}}</textarea>
            </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
              </form>
            </div>
@endsection
@section('footer')
<!-- Select2 -->
<script src="{{asset('back')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->

<script src="{{asset('back')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('back')}}/plugins/inputmask/jquery.inputmask.min.js"></script>

<script src="{{asset('back')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('back')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
  
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
   
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
 
</script>
@endsection
@extends('backend.master')
@section('content')
<div class="content-header">
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Dashboard
      <small>Website Settings</small></h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Website Settings</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        @if(Session::has('message'))
        <div class ="col-sm-12">
            <div class="alert alert-success alert-dismissable">
                {{session::get('message')}}
                <a class="close" data-dismiss="alert">&times;</a>
            </div>
        </div>
        @endif
    
        if($data == '')
        <div class="col-sm-6">
        <form method="post" action="{{url('addSettings')}}"enctype="multipart/form-data">
        {{ csrf_field() }}
        <Request type="hidden" name="tbl" value="{{encrypt('setups')}}">
        <div c
        lass="form-group">
            <Request type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
            <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
            <p><img id="output" width="200" /></p>
        </div>
        <div class ="form-group">
            <label>Site Title</label>
            <Request type="text" name="meta_title" class="form-control">
        </div>
        <div class ="form-group">
            <label>Address</label>
            <Request type="text" name="address" class="form-control">
        </div>
        <div class ="form-group">
            <label>Contact Number</label>
            <Request type="text" name="contact" class="form-control">
        </div>
        <div class ="form-group">
            <label>Email</label>
            <Request type="email" name="email" class="form-control">
        </div>
        <div class ="form-group">
            <label>Social Profile Links</label>
        </div> 
        <div id="socialGroup">
            <div class = "form-group socialField">
                <Request type="text" name="social[]" class="form-control">
                 <a href="#" class="btn btn-warning addField"><i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="alert alert-danger" id="socialError">
            <strong> Sorry!</strong>You've already reached the maximum number of fields for social
            profile links.
        </div>
        <div class="form-group">
        <button class= "btn btn-success">Update</button>
    </form>
</section>
<script>    
        @else
        @endif
        <div class="col-sm-6">
        <form method="post" action="{{url('addSettings')}}"enctype="multipart/form-data">
        {{ csrf_field() }}
        <Request type="hidden" name="tbl" value="{{encrypt('setups')}}">
        <div class="form-group">
            <Request type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
            <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
            <p><img id="output" width="200" src="{{url('public/setups')}}/{{$data->image}}" /></p>
        </div>
        <div class ="form-group">
            <label>Site Title</label>
            <Request type="text" name="meta_title"  value ="{{$data->meta_title}}" class="form-control">
        </div>
        <div class ="form-group">
            <label>Address</label>
            <Request type="text" name="address" value="{{$data->address}}"class="form-control">
        </div>
        <div class ="form-group">
            <label>Contact Number</label>
            <Request type="text" name="contact"  value="{{$data->contact}}" class="form-control">
        </div>
        <div class ="form-group">
            <label>Email</label>
            <Request type="email" name="email" value="{{$data->email}}" class="form-control">
        </div>
        <div class ="form-group">
            <label>Social Profile Links</label>
        </div> 
        <div id="socialGroup">
            <div class = "form-group socialField">
                <Request type="text" name="social[]" class="form-control">
                 <a href="#" class="btn btn-warning addField"><i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="alert alert-danger" id="socialError">
            <strong> Sorry!</strong>You've already reached the maximum number of fields for social
            profile links.
        </div>
        <div class="form-group">
        <button class= "btn btn-success">Update</button>
    </form>
</section>
<script>    
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
fieldCounter = 1;
$('.addField').click(function){
    fieldCounter++;
    if(fieldCounter <=5){
    var newField = $(document.createElement('div')).attr('class','form-group');
    newField.after().html('<Request type="text" name="social[]" class="form-control"></div>');
    newField.appendTo('#socialGroup');
    }else{
        $.('#socialError').show();

    }

})
</script>
<style>
    .socialField {
        position : relative;
    }
    .addField{
        position: absolute;
        top: 0;
        right: 0;
    }
    #socialError {
        display: none;
    }
</style>
@stop

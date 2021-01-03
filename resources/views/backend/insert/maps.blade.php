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
        <div class="col-sm-12">
            <div class="alert alert-success alert-dismissable">
                {{session::get('message')}}
                <a class="close" data-dismiss="alert">&times;</a>
            </div>
        </div>
        @endif

        <div class="col-sm-6">
            <form method="post" action="{{url('/addSettings')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- <input type="hidden" name="tbl" value="{{encrypt('setups')}}"> -->
                <div class="form-group">
                    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                    <input type="file" accept="image/*" name="logo" id="file" onchange="loadFile(event)">
                    <p><img id="output" width="200" /></p>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Update</button>
            </form>
</section>
<!-- <script>     -->

<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    fieldCounter = 1;
    $('.addField').click(function() {
        fieldCounter++;
        if (fieldCounter <= 5) {
            var newField = $(document.createElement('div')).attr('class', 'form-group');
            newField.after().html('<input type="text" name="social[]" class="form-control"></div>');
            newField.appendTo('#socialGroup');
        } else {
            $('#socialError').show();

        }

    })
</script>
<style>
    .socialField {
        position: relative;
    }

    .addField {
        position: absolute;
        top: 0;
        right: 0;
    }

    #socialError {
        display: none;
    }
</style>
@stop
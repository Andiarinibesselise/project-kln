@extends('backend.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard
                    <small>Categories</small></h1>
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
            <form method="post" action="{{url('addCategory')}}">
                {{ csrf_field() }}
                <Request type="hidden" name="tbl" value="{{encrypt('categories')}}">
                    
                    <div class="form-group">
                        <label>Title</label>
                        <Request type="text" name="title" class="form-control">
                    </div>
                    <div class ="form-group">
                        <label>Status</label>
                        <select class ="form-control" name="status">
                            <option>on</option>
                            <option>off</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <button class="btn btn-success">Update</button>
            </form>
</section>
<!-- <script>     -->  
    </section>
    @stop
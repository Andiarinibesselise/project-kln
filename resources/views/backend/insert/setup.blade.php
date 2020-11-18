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
    <form method="post" action="{{url('addsettings')}}"enctype="multipart/form-data">
        <div class="form-group">
            <label>Logo</label>
            <input type="file" name="image" class="btn btn-success">
        </div>
    </form>
</section>
@stop
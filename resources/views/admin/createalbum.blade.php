@extends('layouts.app')
@section('content')
<div class="all_data container-fluid">
<style>
button.btnbtn-default {background: #000;color: #fff; padding: 10px; margin-top: 20px;border-radius: 5px;}
.form-group {margin: 15px;}
.form-group label {text-align: left;float: left;margin-bottom: 5px;}
</style>
<div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/admin/dashboard') }}"><span data-feather="home"></span>Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/admin/service') }}"><span data-feather="file"></span>Service</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/admin/gallery') }}"><span data-feather="shopping-cart"></span>Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/admin/contact') }}"><span data-feather="users"></span>Contact</a></li>
        </ul>
      </div>
    </nav>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('Gallery') }}</h1>
		<div class="breadcram"><a href="{{ url('/admin/dashboard') }}">Dashboard</a> / <a href="javascript:void(0)">Gallery Create</a></div>
      </div>
			<div class="container" style="text-align: center;">
					
				  <div class="span4" style="display: inline-block;padding-bottom:60px;">
					@if(Session::has('message'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
					@endif
					<form name="createnewalbum" method="POST" action="{{url('/admin/createalbum')}}" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="id" value="{{(isset($album->id)) ? $album->id : ''}}">
					  <fieldset>
						@if(isset($album->id))
						<legend>Edit an Gallery</legend>
						@else
						<legend>Create an Gallery</legend>	
						@endif
						<div class="form-group">
						  <label for="name">Album Name <span style="color:red">*</span></label>
						  <input name="name" type="text" class="form-control" placeholder="Album Name" value="{{(isset($album->name)) ? $album->name : ''}}" required>
						</div>
						<div class="form-group">
						  <label for="description">Album Description</label>
						  <textarea name="description" type="text" class="form-control" placeholder="Album description">{{(isset($album->description)) ? $album->description  : ''}}</textarea>
						</div>
						<div class="form-group">
						  <label for="cover_image">Select a Cover Image <span style="color:red">*</span></label>
						  @if(isset($album->cover_image))
						  <img src="{{url('/storage/app/public/')}}/{{$album->cover_image}}" alt="{{(isset($album->name)) ? $album->name : ''}}" width="150px;" required>
						  @endif
						  <input name="cover_image" type="file" class="form-control" placeholder="Album upload">
						</div>
						<button type="submit" class="btnbtn-default">Create!</button>
					  </fieldset>
					</form>
				  </div>
			</div> <!-- /container -->
	</main>
</div>
</div>
@endsection
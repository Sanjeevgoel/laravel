@extends('layouts.app')
@section('content')
<div class="all_data container-fluid">
<style>
a.edit_class {margin-right: 10px;}
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
		<h1 class="add_service"><a href="{{url('/admin/createalbum')}}">Add New Gallery Image</a></h1>
		<div class="breadcram"><a href="{{ url('/admin/dashboard') }}">Dashboard</a> / <a href="javascript:void(0)">Gallery</a></div>
      </div>
	  <div class="services_details">
		@if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
		@endif
	  <table id="example" class="table table-striped" style="width:100%">
	 <thead>
	 <tr>
	  <th>Id</th>
	 <th>Name</th>
	 <th>description</th>
	 <th>image</th>
	 <th>Create Date</th>
	 <th>Action</th>
	 </tr>
	 </thead>
	 <tbody>
	  @foreach($album as $photo)
	  <tr>
	   <td>{{$photo->id}}</td>
	  <td>{{$photo->name}}</td>
	  <td>{{$photo->description}}</td>
	  <td><img alt="{{$photo->name}}" src="{{url('/storage/app/public')}}/{{$photo->cover_image}}" style="width:150px"></td>
	  <td><p>{{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></td>
	  <td style="white-space: nowrap;">
		<a href="{{url('/admin/createalbum')}}/{{$photo->id}}" class="edit_class"><i class="fas fa-edit"></i><!--<button type="button"class="btn btn-primary btn-large">Edit Image</button>--></a><a href="{{url('/admin/delete_gallery')}}/{{$photo->id}}" onclick="return confirm('Are yousure?')" class="delete_class"><i class="fas fa-trash link-danger"></i></a></td>
	  </tr>
	  @endforeach
	  </tbody>
	  </table>
			<?php /* <div class="starter-template">
			<div class="media">
			  <img class="media-object pull-left" alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
			  <div class="media-body">
				<h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
				<p>{{$album->name}}</p>
			  <div class="media">
			  <h2 class="media-heading" style="font-size: 26px;">AlbumDescription :</h2>
			  <p>{{$album->description}}<p>
			  <a href="{{URL::route('add_image',array('id'=>$album->id))}}"><button type="button"class="btn btn-primary btn-large">Add New Image to Album</button></a>
			  <a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
			</div>{{URL::route('delete_album',array('id'=>$photo->id))}}
		  </div>
		</div>
		</div> */ ?>
		  
	  </div>
    </main>
</div>
</div>
@endsection

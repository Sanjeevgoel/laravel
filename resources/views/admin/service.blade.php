@extends('layouts.app')
@section('content')
<div class="all_data container-fluid">
<style>
a.add{display: block;background: #343a40;text-align: center;color: #fff;font-size: 18px;padding: 5px;text-decoration: none;
font-weight: 600;margin-bottom: 10px;border-radius: 5px;}
.add_service {background: #343a40;padding: 10px;border-radius: 5px; font-size: 20px;}
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
        <h1 class="h2">{{ __('Services') }}</h1>
		<h1 class="add_service"><a href="{{ url('/admin/addservice') }}">Add New Service</a></h1>
		<div class="breadcram"><a href="{{ url('/admin/dashboard') }}">Dashboard</a> / <a href="javascript:void(0)">Service</a></div>
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
	 <th>Action</th>
	 </tr>
	 </thead>
	 <tbody>
	  @foreach($data as $d)
	  <tr>
	   <td>{{$d->id}}</td>
	  <td>{{$d->name}}</td>
	  <td>{{$d->desc}}</td>
	  <td><img src="{{url('/storage/app/public')}}/{{$d->image}}" alt="{{$d->name}}" style="width:150px"></td>
	  <td style="white-space: nowrap;">
		<a href="{{url('/admin/addservice')}}/{{$d->id}}" class="edit"><i class="fas fa-edit"></i></a>
		<a href="{{url('/admin/delete_service')}}/{{$d->id}}" class="delete"><i class="fas fa-trash link-danger"></i></a>
	  </td>
	  </tr>
	  @endforeach
	  </tbody>
	  </table>
	  </div>
    </main>
</div>
</div>
@endsection

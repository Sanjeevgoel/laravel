@extends('layouts.app')
@section('content')
<div class="all_data container-fluid">
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
        <h1 class="h2">{{ __('Conatct Us') }}</h1>
		<div class="breadcram"><a href="{{ url('/admin/dashboard') }}">Dashboard</a> / <a href="javascript:void(0)">Contact us</a></div>
      </div>
	  <div class="contact_details">
	  @if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
		@endif
	 <table id="example" class="table table-striped" style="width:100%">
	 <thead>
	 <tr>
	  <th>Id</th>
	 <th>Name</th>
	 <th>Email</th>
	 <th>Phone</th>
	 <th>Message</th>
	 <th>Action</th>
	 </tr>
	 </thead>
	 <tbody>
	  @foreach($data as $d)
	  <tr>
	   <td>{{$d->id}}</td>
	  <td>{{$d->name}}</td>
	  <td>{{$d->email}}</td>
	  <td>{{$d->phone}}</td>
	  <td>{{$d->message}}</td>
	  <td><a href="{{url('/admin/delete_contact')}}/{{$d->id}}" onclick="return confirm('Are yousure?')">Delete</a></td>
	  </tr>
	  @endforeach
	  </tbody>
	  </table>
	  </div>
    </main>
</div>
</div>
@endsection

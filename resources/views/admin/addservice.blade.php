@extends('layouts.app')
@section('content')
<div class="all_data container-fluid">
<style>
legend {text-align: center;margin-bottom: 30px;}
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
        <h1 class="h2"></h1>
		<div class="breadcram"><a href="{{ url('/admin/dashboard') }}">Dashboard</a> / <a href="{{ url('/admin/service') }}">Service</a></div>
      </div>
	  <div class="services_details">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					@if(Session::has('message'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
					@endif
					<div class="card">
						<div class="card-body">
							<form method="POST" action="{{ url('/admin/addservice') }}" enctype='multipart/form-data'>
							@csrf
							 <input type="hidden" name="id" value="{{(isset($Service->id)) ? $Service->id : ''}}">
							  <fieldset>
								@if(isset($Service->id))
								<legend>Edit an Services</legend>
								@else
								<legend>Create an Services</legend>	
								@endif
								<div class="row mb-3">
									<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
									<div class="col-md-6">
										<input id="service_name" type="text" class="form-control" name="name" value="{{(isset($Service->name)) ? $Service->name : ''}}" required>
									</div>
								</div>
								<div class="row mb-3">
									<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
									<div class="col-md-6">
										<textarea id="service_desc" class="form-control" name="desc">{{(isset($Service->desc)) ? $Service->desc  : ''}}</textarea>
									</div>
								</div>
								<div class="row mb-3">
									<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Image Upload') }}</label>
									<div class="col-md-6">
										@if(isset($Service->image))
											<img src="{{url('/storage/app/public/')}}/{{$Service->image}}" alt="{{(isset($Service->name)) ? $Service->name : ''}}" width="150px;" required>
										@endif
										<input id="service_image" type="file" class="form-control" name="image" required>
									</div>
								</div>
								<div class="row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
									</div>
								</div>
								 </fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
    </main>
</div>
</div>
@endsection

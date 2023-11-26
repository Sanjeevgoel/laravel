@extends('layouts.app')
@section('content')
<div class="banner" style="background:url({{ url('/assets/page-header.jpg') }})">
	<div class="container">
		<div class="row"><div class="col-md-12"><div class="card-header1">{{ __('Services') }}</div></div></div>
	</div>
</div>
<section class="service-block">
<div class="container">
  <div class="section-title text-center">{{ __('Services') }}</div>	
	<div class="main-galerry service_main">
		<div class="row">
			@foreach($data as $d)
			<div class="col-md-4">
				<div class="service_area">
					<figure>
					<img src="{{url('/storage/app/public')}}/{{$d->image}}" class="img-fluid" alt="{{$d->name}}"/>
					</figure>
					<div class="service_info">
						<h3>{{$d->name}}</h3>
						<p>{{$d->desc}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
      
</div>
</section>
@endsection


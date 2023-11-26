@extends('layouts.app')
@section('content')
<div class="banner" style="background:url({{ url('/assets/page-header.jpg') }})">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="card-header1">{{ __('Contact Us') }}</div>
			</div>
		</div>
	</div>
</div>
	<div class="container py-4">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">{{ __('Contact Us') }}</div>
					<div class="card-body">
					<div class="row">
					<div class="col-md-6 row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2512870175933!2d77.38083806505041!3d28.622229891298094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff77397f843%3A0x12f83f3243146929!2sChawtech%20Solutions%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1659078066849!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="col-md-6">
					@if(Session::has('message'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
					@endif
					<form action="{{ url('contact')}}" method="POST" name="contact_form" enctype='multipart/form-data'>
						@csrf
						<div class="row mb-3" style="margin-bottom: 2rem!important;">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>
						<div class="row mb-3" style="margin-bottom: 2rem!important;">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3" style="margin-bottom: 2rem!important;">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" maxlength="12" placeholder="Enter only 12 Number" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row mb-3" style="margin-bottom: 2rem!important;">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('Message') }}</label>
                            <div class="col-md-6">
                                <textarea id="message" class="form-control" name="message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>
					</form>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

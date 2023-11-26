@extends('layouts.app')
@section('content')
<div class="banner" style="background:url({{ url('/assets/page-header.jpg') }})">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="card-header1">{{ __('Home') }}</div>
			</div>
		</div>
	</div>
</div>
<div class="container  py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
               <?php /* <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> */ ?>
            </div>
        </div>
    </div>
</div>
@endsection

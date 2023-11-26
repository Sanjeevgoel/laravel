@extends('layouts.app')
@section('content')
<div class="banner" style="background:url({{ url('/assets/page-header.jpg') }})">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="card-header1">{{ __('Gallery') }}</div>
			</div>
		</div>
	</div>
</div>
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Gallery') }}</div>
                <div class="card-body">
				<div class="main-galerry">
				<div class="lightbox">
				  <div class="row">
				 <?php
                        $i = 1;
                     ?>
					@foreach($album as $photo)
					  <div class="column">
						<img src="{{url('/storage/app/public')}}/{{$photo->cover_image}}" style="width:100%" onclick="openModal();currentSlide({{$i}})" class="hover-shadow cursor" alt="{{$photo->name}}">
					  </div>
					  <?php $i++; ?>
					 @endforeach
					</div>
					<div id="myModal" class="modal">
					  <span class="close cursor" onclick="closeModal()">&times;</span>
					  <div class="modal-content">
					  <?php
                        $i = 1;
						?>
						@foreach($album as $photo)
						<div class="mySlides">
						  <img src="{{url('/storage/app/public')}}/{{$photo->cover_image}}" style="width:100%">
						</div>
						 <?php $i++; ?>
						@endforeach
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
						<div class="caption-container">
						  <p id="caption"></p>
						</div>
						<div class="bottom_colum">
						<?php
                        $i = 1;
						?>
						@foreach($album as $photo)
						<div class="column">
						  <img class="demo cursor" src="{{url('/storage/app/public')}}/{{$photo->cover_image}}" style="width:100%" onclick="currentSlide({{$i}})" alt="{{$photo->name}}">
						</div>
						 <?php $i++; ?>
						@endforeach
					  </div>
					  </div>
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

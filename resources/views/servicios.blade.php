@extends('layouts.web')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
            @endif
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
						<span class="intro-text-small">Hecho por: <a href="/" target="_blank">Daniel Gonzalez</a></span>
						<h1 class="cursive-font">Nuestro placer es servirte!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
			
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">Nuestros Servicios</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
                @foreach($servicios as $servicio)
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="{{$servicio->icon}}"></i>
						</span>
						<h3>{{ $servicio->titulo }}</h3>
						<p>{{$servicio->descripcion}}</p>
					</div>
                </div>
                @endforeach
		

			</div>
        </div>
    
	</div>

@endsection

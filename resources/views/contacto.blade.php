@extends('layouts.web')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
					
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-15em">
					@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
					@endif
					@if (session('enviado'))
                        <div class="alert alert-success">
                            {{ session('enviado') }}
                        </div>
					@endif
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
						<span class="intro-text-small">Hecho por: <a href="/" target="_blank">Daniel Gonzalez</a></span>	
						<h1 class="cursive-font">Say hello!</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="{{route('send.email')}}" method="POST">
						@csrf
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nombre</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Dinos tu nombre">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Tu correo">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Asunto</label>
								<input type="text" id="asunto" name="asunto" class="form-control" placeholder="Asunto del mensaje">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Mensaje</label>
								<textarea name="message" id="message" name="mensaje" cols="30" rows="10" class="form-control" placeholder="Escribenos tu mensaje"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://FreeHTML5.co">FreeHTML5.co</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>
@endsection
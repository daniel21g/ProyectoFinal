@extends('layouts.web')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
					@if (session('reserva'))
                        <div class="alert alert-success">
                            {{ session('reserva') }}
                        </div>
					@endif
						@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
           			 @endif
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hecho por: <a href="/" target="_blank">Daniel Gonzalez</a></span>
							<h1 class="cursive-font">Reserva tu mesa!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							@auth
						<div class="form-wrap">
								<div class="tab">									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Reservación de mesa!</h3>
											<form action="{{route('crear_reserva')}}" method="POST"
														enctype="multipart/form-data">
														@csrf
											<div class="row form-group">
											<div class="col-md-12">
														<label for="personas_reserva">Personas</label>
														<select name="personas_reserva" id="personas_reserva" class="form-control">
															<option value="2">2</option>
															<option value="4">4</option>
															<option value="6">6</option>
															<option value="8">8</option>
															<option value="10">10</option>
															<option value="12">12</option>
															<option value="14">14</option>
															<option value="16">16</option>
														</select>
													</div>
											</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Fecha</label>
														<input type="text" name="fecha_reserva" id="date" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Hora</label>
														<input type="text" name="hora_reserva" id="time" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Reservar ahora">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
						@endauth
						@guest 
						<div class="form-wrap">
							<p>Debes <a href="{{route('login')}}" >iniciar sesion</a> o <a href="{{route('register')}}" >estar registrado</a> para reservar una mesa.</p>
						</div>
						@endguest
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection

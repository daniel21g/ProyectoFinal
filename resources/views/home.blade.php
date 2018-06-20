@extends('layouts.web')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
					@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
					@endif
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small">Hecho por: <a href="/" target="_blank">Daniel Gonzalez</a></span>
							<h1 class="cursive-font">PIZZERIA COPA</h1>	
						</div>
						
						@guest
					<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
						<div class="form-wrap">
                                        <div class="tab">
                                            <ul class="tab-menu">
                                                <li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
                                                <li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-content-inner active" data-content="signup">
                                                    <form action="{{ route('register') }}" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="name">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="password2">Repeat Password</label>
                                                                <input type="password" class="form-control" id="password2" name="password_confirmation">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="btn btn-primary" value="Sign up">
                                                            </div>
                                                        </div>
                                                    </form>	
                                                </div>

                                                <div class="tab-content-inner" data-content="login">
                                                    <form action="{{ route('login') }}" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="username">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" name="password">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="btn btn-primary" value="Login">
                                                            </div>
                                                        </div>
                                                    </form>	
                                                </div>

                                            </div>
                                        </div>
                                    </div>
						</div>
						
					</div>
						@endguest
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

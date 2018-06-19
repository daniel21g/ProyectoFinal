<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{ route('home') }}">Pizzeria Copa<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('productos') }}">Productos</a></li>
						<li class="has-dropdown">
							<a href="{{ route('servicios') }}">Servicios</a>
						<!--	<ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul> -->
                        </li>
                        <li><a href="{{ route('reservas') }}">Reservas</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                              
                        @auth
						<li class="has-dropdown">
							<a href="#">{{ Auth::user()->name }}</a>
							<ul class="dropdown">
							<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</li>
						@endauth
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
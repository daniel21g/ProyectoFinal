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
						
                            <span class="intro-text-small">Hecho por: <a href="/" target="_blank">Daniel González</a></span>
                            <h1 class="cursive-font">Prueba nuestro menu!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div class="gtco-section">
		<div class="gtco-container">
        <div class="row">
            
            @if (session('creado'))
                <div class="alert alert-success">
                    {{ session('creado') }}
                </div>
            @endif
            @if (session('guardar'))
                <div class="alert alert-info">
                    {{ session('guardar') }}
                </div>
            @endif
            @if (session('eliminar'))
                <div class="alert alert-danger">
                    {{ session('eliminar') }}
                </div>
            @endif      
             @if (session('crear'))
                <div class="col-md-12">
                 <form action="{{ route('crear_producto') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @include('partials.productoform')
                        <button class="btn btn-primary" type="submit">Crear</button>
                    </form>
                </div>
             @endif
             @if (session('modificar'))
                <div class="alert alert-warning">
                    {{ session('modificar') }}
                </div>
            
                <div class="col-md-12">
                 <form action="{{ route('crear_producto') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="fileimage" id="fileimage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="titulo" id="title" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="descripcion" id="description" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Costo</label>
                            <!-- <input type="text" name="costo" id="costo" value="" class="form-control"> -->
                                <input type="number" name="costo" id="costo" value="" min="1" step="any" class="form-control" />
                            </div>

                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                    </form>
                </div>
             @endif
			 </div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Nuestros Platos</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
                <div class="car-deck">
                @foreach($productos as $producto)
				<div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card ">
                            <div class="card-body"> 
                                    <img src="{{ asset('images/' . $producto->image) }}" alt="Image" class="card-img-top img-responsive">
                                    <h2 class="card-title">{{$producto->titulo}}</h2>
                                    <p class="card-text">{{$producto->descripcion}}</p>
                                    <p><span class="card-text price cursive-font" style="font-size:25pt;">Bs{{$producto->costo}}</span></p>
                                    </div>
                                    @role('admin')
                                <div class="card-footer"> 
                                 <ul class="list-inline">
                                <li>
                                <form class="list-inline-item" action="{{route('productos.edit',$producto)}}" method="GET">
                                @csrf
                                    <button type="submit"  class="btn btn-success" >Modificar</button>
                                </form>
                                </li>
                                <li>
                                <form class="list-inline-item" action="{{route('productos.destroy',$producto)}}" method="POST">
                                @csrf
                                     <input type="hidden" name="_method" value="DELETE">
                                     <button type="submit"  class="btn btn-danger" >Eliminar</button>
                                </form>
                                </li>
                                </ul>
                                </div>
                                     @endrole
                        </div>                 
                </div>
				@endforeach
				</div>
                </div>
                @role('admin')
            <div class="row">
				<div class="col-12 text-center">
                    
                    <form action="{{ route('mostrar_formulario') }}">
                         <button type="submit"  class="btn btn-primary" style="">Agregar producto</button>
                     <form>
                    
                </div>
              </div>
             @endrole
            
		
	</div>
</div>
@endsection
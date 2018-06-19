@extends('layouts.web')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
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
           
                <div class="alert alert-warning">
                    modificando producto: {{$producto_mod->titulo}}
                </div>
           
                <div class="col-md-12">
                 <form action="{{ route('productos.update',$producto_mod) }}" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="fileimage"  id="fileimage" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="titulo" id="title" value="{{$producto_mod->titulo}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="descripcion" id="description" value="{{$producto_mod->descripcion}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Costo</label>
                            <!-- <input type="text" name="costo" id="costo" value="" class="form-control"> -->
                                <input type="number" name="costo" id="costo" value="{{$producto_mod->costo}}" min="1" step="any" class="form-control" />
                            </div>

                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                    </form>
                </div>
             
 @endsection
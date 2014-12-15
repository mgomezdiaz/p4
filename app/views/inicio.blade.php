@extends('plantilla')

@section('contenido')
	<div class="jumbotron">
		<h1>Tiendas</h1>
		<p class="lead">Se pueden crear vendedores y productos en sus secciones</p>
	</div>
	<div class="row marketing">
		<!-- Aqui listamos todos los vendedores -->

		@foreach ($vendedores as $vendedor)
			<div class="panel panel-primary">
				<div class="panel-heading"> {{ $vendedor->nombre.' '.$vendedor->apellido }} </div>

				<ul class="list-group">
					<!-- Aqui listamos todos los productos de un vendedor -->

					@foreach($vendedor->productos as $producto)
							<li class="list-group-item"> {{ $producto->descripcion.' '.$producto->precion }} </li>
					@endforeach
				</ul>

			</div>
		@endforeach

	</div>

@stop
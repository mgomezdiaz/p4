@extends('plantilla')
@section('contenido')
	<div class="row marketing">
		<h3>Crear Producto</h3>
		{{ Form::open(array('url' => 'producto')) }}
			@if(Session::get('mensaje'))
				<div class="alert alert-success"> {{Session::get('mensaje')}} </div>
			@endif
			<div class="form-group">
				{{Form::label('descripcion', 'Descripcion')}}
				{{Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control', 'placeholder' => 'Descripcion del producto', 'autocomplete' => 'off'))}}
			</div>
			@if($errors->has('descripcion'))
				<div class="alert alert-danger">
					@foreach($errors->get('descripcion') as $error)
						* {{ $error }}</br>
					@endforeach	
				</div>
			@endif
			<div class="form-group">
				{{Form::label('precio', 'Precio')}}
				{{Form::text('precio', Input::old('precio'), array('class' => 'form-control', 'placeholder' => 'Precio del producto', 'autocomplete' => 'off'))}}
			</div>
			@if($errors->has('precio'))
				<div class="alert alert-danger">
					@foreach($errors->get('precio') as $error)
						* {{ $error }}</br>
					@endforeach	
				</div>
			@endif
			<div class="form-group">
				{{Form::label('vendedor_id', 'Vendedor')}}
				<select class="form-control" name="vendedor_id">
					@foreach($vendedores as $vendedor)
						<option value="{{ $vendedor->id }}"> {{ $vendedor->nombre.' '.$vendedor->apellido }} </option>
					@endforeach

				</select>
			</div>
			@if($errors->has('vendedor_id'))
				<div class="alert alert-danger">
					@foreach($errors->get('vendedor_id') as $error)
						* {{ $error }}</br>
					@endforeach	
				</div>
			@endif
			{{Form::submit('Guardar', array('class' => 'btn btn-success'))}}
			{{Form::reset('Resetear', array('class' => 'btn btn-default'))}}
		{{Form::close()}}
	</div>
	
	@foreach ($vendedores as $vendedor)
	<h3>Vendedor</h3>
			<div class="panel panel-primary">
				<div class="panel-heading"> {{ $vendedor->nombre.' '.$vendedor->apellido }} </div>

				<ul class="list-group">
					<!-- Aqui listamos todos los productos de un vendedor -->
					<h3>Productos</h3>
					@foreach($vendedor->productos as $producto)

							<li class="list-group-item"> {{ $producto->descripcion.' '.$producto->precion }} </li>
					@endforeach
				</ul>

			</div>
		@endforeach
@stop
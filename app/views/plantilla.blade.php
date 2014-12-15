<!DOCTYPE html>
<html>
	<head>
		<title>Tienda</title>
		<!--Incluimos el css bootstrap y el css de la plantilla que usamos con los helpers de laravel-->

		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/demo.css') }}
	</head>
	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li>{{ HTML::link('tienda', 'Inicio') }}</li>
					<li>{{ HTML::link('vendedor', 'Vendedores') }}</li>
					<li>{{ HTML::link('producto', 'Productos') }}</li>
				</ul>
				<h3 class="text-muted">Tienda</h3>

			</div>

			@yield('contenido')

			<div class="footer">
				<p>&copy; JCBCSystems 2014</p>
			</div>

		</div>
		<script src="https://code.jquery.com/jquery.js"></script>
		{{ HTML::script('js/bootstrap.min.js') }}


	</body>
</html>
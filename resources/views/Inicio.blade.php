<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" >
	</head>
	<body>
		<div class="row justify-content-center my-5" >
			<div class="col-lg-10" >
				<a type="button" class="btn-success btn-sm" href="/New" >Agregar</a><br><br>
				<div class="shadow-lg">
					<table id="table" class="table table-bordered table-sm" >
						<thead align="center" >
							<tr>
								<th>#</th>
								<th>Número de habitaciones</th>
								<th>Número de baños</th>
								<th>Área</th>
								<th>Precio</th>
								<th>Localización</th>
								<th>Categoría</th>
								<th>Negociable</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody><?php $n=1; ?>
							@foreach ($casas as $casa)
							<tr>
								<td>{{ $n++ }}</td>
								<td>{{ $casa->c_habit }}</td>
								<td>{{ $casa->c_banios }}</td>
								<td>{{ $casa->tamanio }}</td>
								<td>${{ $casa->precio }}</td>
								<td>{{ $casa->colonia }}, {{ $casa->municipio }}, {{ $casa->departamento }}</td>
								<td>{{ $casa->categoria }}</td>
								<td>{{ $casa->negociable }}</td>
								<td>{{ $casa->estado }}</td>
								<td>
									<a type="button" class="btn-primary btn-sm" href="/Edit/{{ $casa->id_vivienda }}" >Editar</a>
									<a type="button" class="btn-danger btn-sm" href="/Delete/{{ $casa->id_vivienda }}" >Eliminar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<script src="{{ asset('js/jquery.js') }}" ></script>
		<script src="{{ asset('bootstrao/js/bootstrap.js') }}" ></script>
		<script src="{{ asset('bootstrao/js/bootstrap.bundle.js') }}" ></script>
	</body>
</html>
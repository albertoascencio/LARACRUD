<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" >
	</head>
	<body>
		<div class="row justify-content-center my-5" >
			<div class="col-lg-5" >
				<div class="shadow-lg">
					<div class="card-body" >
						<form id="form" action="/Update/{{ $var['id_vivienda'] }}" method="post" >
							<div class="row" >
								<div class="col" >
									<div class="form-group" >
										<label>Número de habitaciones</label>
										<input type="number" name="c_habit" id="c_habit" class="form-control" value="{{ $var['c_habit'] }}" autofocus required >
									</div>
								</div>
								<div class="col" >
									<div class="form-group" >
										<label>Número de baños</label>
										<input type="number" name="c_banios" id="c_banios|" class="form-control" value="{{ $var['c_banios'] }}" required >
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col" >
									<div class="form-group" >
										<label>Área</label>
										<input type="number" step="any" name="tamanio" id="tamanio" class="form-control" value="{{ $var['tamanio'] }}" required >
									</div>
								</div>
								<div class="col" >
									<div class="form-group" >
										<label>Precio</label>
										<input type="number" step="any" name="precio" id="precio" class="form-control" value="{{ $var['precio'] }}" required >
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col" >
									<div class="form-group" >
										<label>Municipio</label>
										<input type="text" name="municipio" id="municipio" class="form-control" value="{{ $var['municipio'] }}" required >
									</div>
								</div>
								<div class="col" >
									<div class="form-group" >
										<label>Departamento</label>
										<input type="text" name="departamento" id="departamento" class="form-control" value="{{ $var['departamento'] }}" required >
									</div>
								</div>
							</div>
							<div class="form-group" >
								<label>Colonia</label>
								<input type="text" name="colonia" id="colonia" class="form-control" value="{{ $var['colonia'] }}" required >
							</div>
							<div class="row" >
								<div class="col" >
									<div class="form-group" >
										<label>Categoría</label>
										<select name="categoria" id="categoria" class="form-control" value="{{ $var['categoria'] }}" required="" >
											<option value="Local" >Local</option>
											<option value="Lote" >Lote</option>
											<option value="Vivienda" >Vivienda</option>
										</select>
									</div>
								</div>
								<div class="col" >
									<div class="form-group" >
										<label>Negociable</label>
										<select name="negociable" id="negociable" class="form-control" value="{{ $var['negociable'] }}" required="" >
											<option value="Sí" >Sí</option>
											<option value="No" >No</option>
										</select>
									</div>
								</div>
								<div class="col" >
									<div class="form-group" >
										<label>Estado</label>
										<select name="estado" id="estado" class="form-control" value="{{ $var['estado'] }}" required="" >
											<option value="En venta" >En venta</option>
											<option value="En alquiler" >En alquiler</option>
										</select>
									</div>
								</div>
							</div><br>
							<center>
								<a type="button" class="btn btn-danger" href="/" >Cancelar</a>
								<button type="submit" class="btn btn-primary" >Guardar</button>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ asset('js/jquery.js') }}" ></script>
		<script src="{{ asset('bootstrao/js/bootstrap.js') }}" ></script>
		<script src="{{ asset('bootstrao/js/bootstrap.bundle.js') }}" ></script>
	</body>
</html>
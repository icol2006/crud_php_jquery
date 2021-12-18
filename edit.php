<?php if(!isset($_GET['id'])){header("Location: index.php?msg=invalid");} ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planilla</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="font-family:roboto,sans-serif;">

	
<div class="container">
	<div class="container py-3" id='editBox' style="background:#e4e4e417;">
			<h2 class='text-center'>Editar Datos</h2><br>
		<div id='msgEdit'></div>
			<form action="" id='editForm' method="post">
				<div class="row">
				<div class="col-md-6">
			    <div class="form-group">
					<label>Id Pago</label>
					<input type="text" id="upd_id_pago" name="upd_id_pago"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Id Empleado</label>
					<input type="text" id="upd_id_empleado" name="upd_id_empleado"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Fecha</label>
					<input type="text" id="upd_fecha" name="upd_fecha"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Dia</label>
					<input type="number" id="upd_dia" name="upd_dia"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Hora</label>
					<input type="number" id="upd_hora" name="upd_hora"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Hora extra doble</label>
					<input type="number" id="upd_hora_doble" name="upd_hora_doble" class='form-control' required>
				</div>
			</div>
				
			<div class="col-md-6">		
				<div class="form-group">
					<label>Tutoreo</label>
					<input type="text" id="upd_tutoreo" name="upd_tutoreo"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Raleo</label>
					<input type="text" id="upd_raleo" name="upd_raleo"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Bajar Planta</label>
					<input type="text" id="upd_bajar_planta" name="upd_bajar_planta"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Deshoje</label>
					<input type="text" id="upd_deshoje" name="upd_deshoje"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Cosecha</label>
					<input type="text" id="upd_cosecha" name="upd_cosecha"  class='form-control' required>
				</div>
				<div class="form-group">
					<label>Inversion</label>
					<input type="text" id="upd_inv" name="upd_inv"  class='form-control' required>
				</div>
			</div>
				</div>
	
				<center>
				<input type="submit" value="Update" class='btn update btn-success '>
				<a href="index.php#first" class='btn btn-danger'>Cancelar</a>
				</center>
			</form>
			<br>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/edit.js"></script>
</html>
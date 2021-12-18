<?php require_once "class.php";
if(empty($_POST['id_pago'])){
	echo "Not found";
	die();
} else {
	$user = new user;
	$user->update(
		$_POST['id_pago'],
		$_POST['id_empleado'],
		$_POST['fecha'],
		$_POST['dia'],
		$_POST['hora'],
		$_POST['hora_doble'],
		$_POST['tutoreo'],
		$_POST['raleo'],
		$_POST['bajar_planta'],
		$_POST['deshoje'],
		$_POST['cosecha'],
		$_POST['inv']
	);
}

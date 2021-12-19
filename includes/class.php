<?php require_once "db.php";
class user extends db {
	public function insert($f,$l,$w,$c,$e){
		$query = "INSERT INTO users(first,last,work,city,email) VALUES(?,?,?,?,?) ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e])){
			echo "Registered Successfully!";
		}
	}
	public function get_row($id){
		$query = "SELECT * FROM pagos WHERE id_pago = ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$id]);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			return $row;		
		}
	}
	public function load(){
		$query = "SELECT * FROM pagos ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-responsive table-hover'><tr class='bg-light'>" .
			"<th scope='col'>ID Pago</th><th scope='col'>ID Empleado</th><th scope='col'>Nombre</th><th scope='col'>FECHA</th><th scope='col' >Día</th> " .
			"<th scope='col' id='content1' style='display: none;' class='pesos'>$</th><th scope='col'>Hora</th> " .
			"<th scope='col' id='content3' style='display: none;' class='pesos'>$</th><th scope='col'>Hora extra doble</th> " .
			"<th scope='col' id='content5' style='display: none;' class='pesos'>$</th> <th scope='col'>Tutoreo</th>" .
			"<th scope='col'> 1x / 2x </th><th scope='col' id='content7' style='display: none;' class='pesos'>$</th><th scope='col'>Raleo</th>" .
			"<th scope='col' id='content9' style='display: none;'  class='pesos'>$</th> " .
			"<th scope='col'>Bajar planta</th><th scope='col' id='content11' style='display: none;'  class='pesos'>$</th>" .
			"<th scope='col'>Deshoje</th><th scope='col'>Hojas</th><th scope='col' id='content13' style='display: none;'  class='pesos'>$</th>" .
			"<th scope='col'>Cosecha</th><th scope='col' id='content15' style='display: none;'  class='pesos'>$</th><th scope='col'>INV</th><th scope='col'>TOTAL</th>";
			"<th colspan='2'>Option</th>";

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id_pago = $row['id_pago'];
				$id_empleado = $row['id_empleado'];
				$nombre = "sdflkj";
				$fecha = $row['fecha'];
				$dia = $row['dia'];
				$hora = $row['hora'];
				$hora_doble = $row['hora_doble'];
				$tutoreo = $row['tutoreo'];
				$raleo = $row['raleo'];
				$bajar_planta = $row['bajar_planta'];
				$deshoje = $row['deshoje'];
				$cosecha = $row['cosecha'];
				$bajar_planta = $row['bajar_planta'];
				$inv = $row['inv'];

				$out .="<tr>";	
				$out .="<td>$id_pago</td>";	
				$out .="<td>$id_empleado</td>";				
				$out .="<td>$nombre </td>";
				$out .="<td>$fecha </td>";
				$out .="<td>$dia </td>";
				$out .="<td id='content2' style='display: none' class='pesos'>$3.33</td>";
				$out .="<td>$hora </td>";
				$out .="<td id='content4' style='display: none;'  class='pesos'>$4.44</td>";	
				$out .="<td>$hora_doble </td>";
				$out .="<td id='content6' style='display: none;'  class='pesos'> $5.55</td>";	
				$out .="<td>$tutoreo </td>";
				$out .="<td> 1x </td>";
				$out .="<td id='content8' style='display: none;'  class='pesos'> $6.66</td>";	
				$out .="<td>$raleo </td>";
				$out .="<td id='content10' style='display: none;'  class='pesos'>$7.77</td>";	
				$out .="<td>$bajar_planta </td>";
				$out .="<td id='content12' style='display: none;'  class='pesos'>$8.88</td>";	
				$out .="<td>$deshoje </td>";
				$out .="<td>33</td>";
				$out .="<td id='content14' style='display: none;'  class='pesos'>$9.99</td>";	
				$out .="<td>$cosecha </td>";
				$out .="<td id='content16' style='display: none;'  class='pesos'>$10.10</td>";	
				$out .="<td>$inv </td>";
				$out .="<td>$11.11</td>";
				$out .="<td><a href='edit.php?id=$id_pago' class='edit btn btn-sm btn-success' title='edit'><i class='fa fa-fw fa-pencil'></i></a></td>";    
				$out .="<td><span id='$id_pago' class='del btn btn-sm btn-danger' title='delete'><i class='fa fa-fw fa-trash'></i></span></td>";    
				$out .="</tr>";	

			} 
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-info text-center col-sm-5 mx-auto'>No records yet. its time to add new!</p>";
		}
		return $out;
		return $out;
	}
	// update data
	public function update($id_pago,$id_empleado,$fecha,$dia,$hora,$hora_doble,$tutoreo,$raleo,$bajar_planta,$deshoje,$cosecha,$inv){
		
		$query = "UPDATE pagos SET id_empleado= ?,fecha = ?,dia =  ? ,hora =  ?, hora_doble =  ?,  
		tutoreo =  ?,  raleo =  ?,  bajar_planta =  ?,  deshoje =  ?,  cosecha =  ?, inv =  ? where id_pago = ?";
		$stmt = $this->connect()->prepare($query);
		
		if($stmt->execute([$id_empleado,$fecha,$dia,$hora,$hora_doble,$tutoreo,$raleo,$bajar_planta,$deshoje,$cosecha,$inv,$id_pago])){
		
			echo "Datos actualizados!";
		}
	}
	//user search results
	public function search($text){
		$val=$text;
		$val=str_replace("%","",$val);
		$text = strtolower($text); 
		$query = "SELECT * FROM pagos WHERE id_pago = ? OR  id_empleado LIKE ? OR  fecha LIKE ? OR dia =  ? OR  hora =  ? OR hora_doble =  ? OR  tutoreo =  ? OR  raleo =  ? OR  bajar_planta =  ? OR  deshoje =  ? OR  cosecha =  ? OR inv =  ?";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$text,$text,$text,$text,$text,$text,$text,$text,$text,$text,$text,$val]);
		print_r($val);
		
		$out = "";
		$out .= "<table style='font-size:14px;' class='table table-responsive table-hover'><tr class='bg-light'>" .
		"<th scope='col'>ID Pago</th><th scope='col'>ID Empleado</th><th scope='col'>Nombre</th><th scope='col'>FECHA</th><th scope='col' >Día</th> " .
		"<th scope='col' id='content1' style='display: none;' class='pesos'>$</th><th scope='col'>Hora</th> " .
		"<th scope='col' id='content3' style='display: none;' class='pesos'>$</th><th scope='col'>Hora extra doble</th> " .
		"<th scope='col' id='content5' style='display: none;' class='pesos'>$</th> <th scope='col'>Tutoreo</th>" .
		"<th scope='col'> 1x / 2x </th><th scope='col' id='content7' style='display: none;' class='pesos'>$</th><th scope='col'>Raleo</th>" .
		"<th scope='col' id='content9' style='display: none;'  class='pesos'>$</th> " .
		"<th scope='col'>Bajar planta</th><th scope='col' id='content11' style='display: none;'  class='pesos'>$</th>" .
		"<th scope='col'>Deshoje</th><th scope='col'>Hojas</th><th scope='col' id='content13' style='display: none;'  class='pesos'>$</th>" .
		"<th scope='col'>Cosecha</th><th scope='col' id='content15' style='display: none;'  class='pesos'>$</th><th scope='col'>INV</th><th scope='col'>TOTAL</th>";
		"<th colspan='2'>Option</th>";

		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$id_pago = $row['id_pago'];
			$id_empleado = $row['id_empleado'];
			$nombre = "sdflkj";
			$fecha = $row['fecha'];
			$dia = $row['dia'];
			$hora = $row['hora'];
			$hora_doble = $row['hora_doble'];
			$tutoreo = $row['tutoreo'];
			$raleo = $row['raleo'];
			$bajar_planta = $row['bajar_planta'];
			$deshoje = $row['deshoje'];
			$cosecha = $row['cosecha'];
			$bajar_planta = $row['bajar_planta'];
			$inv = $row['inv'];

			$out .="<tr>";	
			$out .="<td>$id_pago</td>";	
			$out .="<td>$id_empleado</td>";				
			$out .="<td>$nombre </td>";
			$out .="<td>$fecha </td>";
			$out .="<td>$dia </td>";
			$out .="<td id='content2' style='display: none' class='pesos'>$3.33</td>";
			$out .="<td>$hora </td>";
			$out .="<td id='content4' style='display: none;'  class='pesos'>$4.44</td>";	
			$out .="<td>$hora_doble </td>";
			$out .="<td id='content6' style='display: none;'  class='pesos'> $5.55</td>";	
			$out .="<td>$tutoreo </td>";
			$out .="<td> 1x </td>";
			$out .="<td id='content8' style='display: none;'  class='pesos'> $6.66</td>";	
			$out .="<td>$raleo </td>";
			$out .="<td id='content10' style='display: none;'  class='pesos'>$7.77</td>";	
			$out .="<td>$bajar_planta </td>";
			$out .="<td id='content12' style='display: none;'  class='pesos'>$8.88</td>";	
			$out .="<td>$deshoje </td>";
			$out .="<td>33</td>";
			$out .="<td id='content14' style='display: none;'  class='pesos'>$9.99</td>";	
			$out .="<td>$cosecha </td>";
			$out .="<td id='content16' style='display: none;'  class='pesos'>$10.10</td>";	
			$out .="<td>$inv </td>";
			$out .="<td>$11.11</td>";
			$out .="<td><a href='edit.php?id=$id_pago' class='edit btn btn-sm btn-success' title='edit'><i class='fa fa-fw fa-pencil'></i></a></td>";    
			$out .="<td><span id='$id_pago' class='del btn btn-sm btn-danger' title='delete'><i class='fa fa-fw fa-trash'></i></span></td>";    
			$out .="</tr>";	

		} 
	$out .= "</table>";
		
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-danger text-center col-sm-3 mx-auto'>Not Found.</p>";
		}
		return $out;
	}
	public function delete($id){
		$query = "DELETE FROM pagos WHERE id_pago = ?";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$id])){
			echo "1 record deleted.";
		}
	}
//end of class
}
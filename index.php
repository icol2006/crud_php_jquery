<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planilla</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/utilidades.js"></script>
</head>
<body style="font-family:roboto,sans-serif;">



		<div class="container">
			<h4 style='margin-top:20px'>Listado de registros</h4><br>
			
			<input type="text" id="q" name='q' style='width: 50%;' placeholder="search..." class='form-control' autocomplete='off' >
			<br>
			<div id="msg" ></div>
			
			<form action="#" method="post">
      <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent1()">  Dia $
      <input type="checkbox" name="check" id="check2" value="1" onchange="javascript:showContent2()">  Hora $
      <input type="checkbox" name="check" id="check3" value="1" onchange="javascript:showContent3()">  Hora doble $
      <input type="checkbox" name="check" id="check4" value="1" onchange="javascript:showContent4()">  Tutoreo $
      <input type="checkbox" name="check" id="check5" value="1" onchange="javascript:showContent5()">   Raleo $
      <input type="checkbox" name="check" id="check6" value="1" onchange="javascript:showContent6()">  Bajar planta $
      <input type="checkbox" name="check" id="check7" value="1" onchange="javascript:showContent7()">  Deshoje $
      <input type="checkbox" name="check" id="check8" value="1" onchange="javascript:showContent8()">  Cosecha $
    </form>
	<br>
			<div id="table"></div>
		</div>
		

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
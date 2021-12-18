<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax PHP CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="font-family:roboto,sans-serif;">



		<div class="container">
			<h4 style='margin-top:20px'>Listado de registros</h4><br>
			<input type="text" id="q" name='q' style='width: 50%;' placeholder="search..." class='form-control' autocomplete='off' >
			<br>
			<div id="msg" ></div>
			<div id="table"></div>
		</div>
		

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
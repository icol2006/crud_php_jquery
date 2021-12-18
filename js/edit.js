$(document).ready(function(){
	function get_edit_id(){
		let url = new URLSearchParams(window.location.search);
			let id = url.get('id');
			id = parseInt(id);
		return id;
	}
	function get_rows(){
		let id = get_edit_id();
		$.get(
			"includes/get.php",
			{id : id},
			function(data){
				data = JSON.parse(data);
				$("#upd_id_pago").val(data.id_pago);
				$("#upd_id_empleado").val(data.id_empleado);
				$("#upd_fecha").val(data.fecha);
				$("#upd_dia").val(data.dia);
				$("#upd_hora").val(data.hora);
				$("#upd_hora_doble").val(data.hora_doble);
				$("#upd_tutoreo").val(data.tutoreo);
				$("#upd_raleo").val(data.raleo);
				$("#upd_bajar_planta").val(data.bajar_planta);
				$("#upd_deshoje").val(data.deshoje);
				$("#upd_cosecha").val(data.cosecha);
				$("#upd_inv").val(data.inv);
				console.log(data);
			});
	}
	if(get_edit_id()){
		get_rows();
	}
		$("#editForm").submit(function(e){
		e.preventDefault();
		let id = get_edit_id();
		console.log(id);
		$.ajax({
			type: "POST",
			url:"includes/update.php",
			data: {
			id_pago:id,
			id_empleado : $('#upd_id_empleado').val(),
			fecha  : $('#upd_fecha').val(),
			dia  : $('#upd_dia').val(),
			hora : $('#upd_hora').val(),
			hora_doble : $('#upd_hora_doble').val(),
			tutoreo : $('#upd_tutoreo').val(),
			raleo : $('#upd_raleo').val(),
			bajar_planta : $('#upd_bajar_planta').val(),
			deshoje : $('#upd_deshoje').val(),
			cosecha : $('#upd_cosecha').val(),
			inv : $('#upd_inv').val()
			},
		})
		.done(function(data){
			console.log(data);
		$("#upd_id_pago").val('');
		$("#upd_id_empleado").val('');
		$("#upd_fecha").val('');
		$("#upd_dia").val('');
		$("#upd_hora").val('');
		$("#upd_hora_doble").val('');
		$("#upd_tutoreo").val('');
		$("#upd_raleo").val('');
		$("#upd_bajar_planta").val('');
		$("#upd_deshoje").val('');
		$("#upd_cosecha").val('');
		$("#upd_inv").val('');
			$("#table").load("includes/load.php");
			$("#msgEdit").html("<p class='text-center alert alert-success'>"+data+"</p>");
			$("#msgEdit").slideDown(1000);
		});
 });
});	
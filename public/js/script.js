$("#siguiente").click(function(){
	var turno = "1";
	var tipoVentanilla = "1";
	var ventanilla = "1";
	var usuario = "1";
	var route = "/Turno";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{turno: turno, tipoVentanilla_id: tipoVentanilla, ventanilla_id: ventanilla, usuario_id: usuario},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});
});
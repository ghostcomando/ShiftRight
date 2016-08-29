$(document).ready(function()
{
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/turnos";
	
	$.get(route, function(res)
	{
		$(res).each(function(key, value)
		{
			tablaDatos.append("<tr><td>"+value.id+"</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>")
		});
	});
});

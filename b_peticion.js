$(obtener_registros());

function obtener_registros(apoderado)
{
	$.ajax({
		url : 'b_consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { apoderado: apoderado },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});

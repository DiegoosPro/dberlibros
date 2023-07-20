$(".tablas").on("click", ".btnEditarUsuario", function(){


	var idUsuario = $(this).attr("idUsuario");


	var datos = new FormData();

	datos.append("idUsuario", idUsuario);


	$.ajax({


		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){

		    $("#id").val(respuesta["id"]);

			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarUsuario").val(respuesta["usuario"]);
			$("#editarPerfil").val(respuesta["perfil"]);



		}



	})


})
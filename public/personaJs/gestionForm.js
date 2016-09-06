$(document).ready(function()
{

cargarRegistros();
cargarRegistrosUsuarios();

});

function restablecerForm()
{
	$("#cedula").val("");
	$("#nombre").val("");
	$("#apellido").val("");
	$("#telefono").val("");
	$("#direccion").val("");

	$("#id_persona").val("");
	$("#cedulaP").val("");
	$("#nombreP").val("");
	$("#apellidoP").val("");
	$("#telefonoP").val("");
	$("#direccionP").val("");

	$("#nombreU").val("");
	$("#apellidoU").val("");
	$("#correo").val("");
	$("#contrasena").val("");


	$("#id_usuario").val("");
	$("#correoU").val("");
	$("#contrasenaU").val("");


	cargarRegistros();
	cargarRegistrosUsuarios();

}

$("#registrar").click(function(){

	var cedula=$("#cedula").val();
	var nombre=$("#nombre").val();
	var apellido=$("#apellido").val();
	var telefono=$("#telefono").val();
	var direccion=$("#direccion").val();

	var route="http://localhost:8000/persona";
	var token=$("#token").val();

	$.ajax({
		url: 		route,
		headers: 	{'X-CSRF-TOKEN': token},
		type: 		'POST',
		dataType: 	'json',
		data: 		{
						cedula: 	cedula,
						nombre: 	nombre,
						apellido: 	apellido, 
						telefono: 	telefono,
						direccion: 	direccion
					},

		success:function(){
			//$(location).attr('href','list');
			$("#mensajeSuccess").html('Persona registrada');
			$("#msj-success").fadeIn();

			restablecerForm();
			

		},
		error:function(msj){
			$("#mensajeDanger").html(msj.responseJSON.genre);
			$("#msj-danger").fadeIn();
			
		}		
	});
});


$("#RegistrarUser").click(function() 
{

	var id_persona=$("#id_persona").val();
	var correo=$("#correo").val();
	var contrasena=$("#contrasena").val();

	var route="http://localhost:8000/usuario";
	var token=$("#token").val();

	$.ajax({
		url 	: route,
		headers : {'X-CSRF-TOKEN' : token},
		type 	: 'POST',
		dataType: 'json',
		data:{
			id_persona 	: id_persona,
			email 		: correo,
			password 	: contrasena

		},
		success:function()
		{
			$("#mensajeSuccess").html('Usuario registrado');
			$("#msj-success").fadeIn();

			restablecerForm();
			$("#modalUserRegistrar").modal("hide");
			

		},
		error:function(msj){

			$("#mensajeDanger").html(msj.responseJSON.genre);
			$("#msj-danger").fadeIn();
		}

	});
	
});





function cargarRegistros(page){
	
	
	var route="http://localhost:8000/persona";


	$.ajax({
		url: 	route,
		data: 	{page:page},
		type: 	'GET',
		dataType:'json',

		success: function(data){
		

		console.log(data.personas);

		if(page!=null){
			$('.listPaginate').html(data.vista);
		}
		
		var datos=$(".registros");
		$(".registros").empty();
		
		

		$(data.personas.data).each(function(key,value){

			datos.append('<tr><td>'+value.id+'</td>'
							+'<td>'+value.cedula+'</td>'
							+'<td>'+value.nombre+'</td>'
							+'<td>'+value.apellido+'</td>'
							+'<td><button value="'+value.id+'" onclick="ElegirModal(this)" class="btn btn-app"><i class="fa fa-edit"></i></button></td></tr>');
						
			//alert(value.genre);
		});


		}
		//$('.paginacion').html('<?php {!!result.genero->render()!!} ?>');

	});
}


function cargarRegistrosUsuarios(page){
	
	
	var route="http://localhost:8000/usuario";


	$.ajax({
		url: 	route,
		data: 	{page:page},
		type: 	'GET',
		dataType:'json',

		success: function(data){
		
		console.log(data.usuarios);

		if(page!=null){
			$('.listPaginateU').html(data.vista);
		}
		
		var datos=$(".registrosU");
		$(".registrosU").empty();
		
		

		$(data.usuarios.data).each(function(key,value){

			datos.append('<tr><td>'+value.id+'</td>'
							+'<td>'+value.nombre+'</td>'
							+'<td>'+value.apellido+'</td>'
							+'<td>'+value.email+'</td>'
							+'<td><button value="'+value.id+'" onclick="ElegirModal(this)" class="btn btn-app"><i class="fa fa-edit"></i></button></td></tr>');
						
			//alert(value.genre);
		});


		}
		//$('.paginacion').html('<?php {!!result.genero->render()!!} ?>');

	});
}

$(document).on('click', '.pagination a', function(e){

	e.preventDefault();

	var page=$(this).attr('href').split('page=')[1];
	
	if($(this).parent().parent().parent().attr('class')=='listPaginate')
	{
		cargarRegistros(page);
	}else{
		cargarRegistrosUsuarios(page);
	}

	
});


function ElegirModal(boton)
{
	
	var modal=$(boton).parent().parent().parent().parent().parent().parent().parent().parent().attr('class');
	
	if(modal=='listaCont')
	{

		mostrarModalPersonaEdit(boton);
	}else if(modal=='listContPers')
	{
		
		mostrarModalCreateUser(boton);
	}else if(modal=='listContUser')
	{
		
		mostrarModalUserEdit(boton);
	}
}



function mostrarModalPersonaEdit(boton){
	
	//alert($(boton).parent().parent().parent().parent().parent().parent().parent().parent().attr('class'));
	var route="http://localhost:8000/persona/"+boton.value+"/edit";

	$.get(route, function(result)
	{

		 $("#id_persona").val(result.id);
		 $("#cedulaP").val(result.cedula);
		 $("#nombreP").val(result.nombre);
		 $("#apellidoP").val(result.apellido);
		 $("#telefonoP").val(result.telefono);
		 $("#direccionP").val(result.direccion);

		 $("#modalPersonaEdit").modal("show");

	});

}


$("#Modificar").click(function() 
{

	
	 var id_persona =$("#id_persona").val();
	 var nombre 	=$("#nombreP").val();
	 var apellido 	=$("#apellidoP").val();
	 var telefono 	=$("#telefonoP").val();
	 var direccion  =$("#direccionP").val();

	 var route="http://localhost:8000/persona/"+id_persona+"";
	 var token=$("#token").val();

	 $.ajax({
	 	url: 		route,
	 	headers: 	{'X-CSRF-TOKEN': token},
		type: 		'PUT',
		dataType: 	'json',
	 	data: {
	 			id_persona 	: id_persona,
	 			nombre 		: nombre,
	 			apellido 	: apellido,
	 			telefono 	: telefono,
	 			direccion 	: direccion
	 		},
	 		success:function(result)
	 		{
	 			$("#mensajeSuccess").html('Modificación exitosa');
				$("#msj-success").fadeIn();

				restablecerForm();
				$("#modalPersonaEdit").modal("hide");
	
			},
			error:function(msj){
				$("#mensajeDanger").html(msj.responseJSON.genre);
				$("#msj-danger").fadeIn();
		 		}
		 });
	 
	 
	
});



function mostrarModalCreateUser(boton){
	
	var route="http://localhost:8000/persona/"+boton.value+"/edit";

	$.get(route, function(result)
	{
		 $("#id_persona").val(result.id);
		 $("#nombreU").val(result.nombre);
		 $("#apellidoU").val(result.apellido);
		 $("#modalUserRegistrar").modal("show");
	});

	
}

function mostrarModalUserEdit(boton){
	
	var route="http://localhost:8000/usuario/"+boton.value+"/edit";

	$.get(route, function(result)
	{
		 $("#id_usuario").val(result.id);
		 $("#correoU").val(result.email);
		 
		 $("#modalUserEdit").modal("show");
	});

	
}



$("#ModificarUser").click(function() 
{

	
	 var id_usuario =$("#id_usuario").val();	
	 var correo 	=$("#correoU").val();
	 var contrasena  =$("#contrasenaU").val();

	 var route="http://localhost:8000/usuario/"+id_usuario+"";
	 var token=$("#token").val();

	 $.ajax({
	 	url: 		route,
	 	headers: 	{'X-CSRF-TOKEN': token},
		type: 		'PUT',
		dataType: 	'json',
	 	data: {
	 			id 			: id_usuario,
	 			email 		: correo,
	 			password 	: contrasena
	 			
	 		},
	 		success:function(result)
	 		{
	 			$("#mensajeSuccess").html('Modificación exitosa');
				$("#msj-success").fadeIn();

				restablecerForm();
				$("#modalUserEdit").modal("hide");
	
			},
			error:function(msj){
				$("#mensajeDanger").html(msj.responseJSON.genre);
				$("#msj-danger").fadeIn();
		 		}
		 });
	 
	 
	
});
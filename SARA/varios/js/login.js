$(document).on('ready', funcPrincipal);

function funcPrincipal(){
	$('#miForm').on('submit', ejecutarAjax);
}

var usuario, contra;

function ejecutarAjax(event){

	var usuario = $('#usuario').val();
	var contrasena = $('#contrasena').val();
	var base_url = $("#url").val();
	var datosEnviados = {
		'usuario'		: usuario,
		'contrasena'	: contrasena
	};
	
	$.ajax({
		type		: 'POST',
		url			: base_url + 'login/login_usuario',
		data		: datosEnviados,
		dataType	: 'json',
		encode		: true
	})

	.done(function (datos) {

		if ( datos.exito )
			window.location.href = base_url + 'mapa';
		if (datos.nousuario && usuario != '' && contrasena != '')
			$('#respuesta').text( 'Usuario no existe' );
		if ( datos.noperfil && usuario != '' && contrasena != '')
			$('#respuesta').text( datos.perfil + '  ' + datos.usuario + ': No tiene los permisos suficientes para ingresar.' );

		document.getElementById("usuario").value = '';
		document.getElementById("contrasena").value = '';
	});

	event.preventDefault();
}
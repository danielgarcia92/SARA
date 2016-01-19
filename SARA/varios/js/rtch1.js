$( document ).ready(inicializar);

function inicializar(){
	iniPusher();
	enviarDato();
}

function enviarDato(){
	var piso = $("#piso").val();
	var aula = $("#aula").val();
    $.ajax({
    	url		: '/SARA/varios/rt.php',
		type	: 'post',
		data	: {"piso":piso,"aula":aula,"channel":"2"},
	});
}

function iniPusher(){
	var pusher = new Pusher('ff4b6a8b1f92ee1509c2');
	var channel = pusher.subscribe('rtch1');
	channel.bind('actualizar', function(data) {

								}
				);
}
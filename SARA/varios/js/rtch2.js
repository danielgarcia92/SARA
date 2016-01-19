$( document ).ready(inicializar);

function inicializar(){
	iniPusher();
}

function iniPusher(){
	var pusher = new Pusher('ff4b6a8b1f92ee1509c2');
	var channel = pusher.subscribe('rtch2');
	channel.bind('actualizar', function(data) {
                                    $("#pDialogo").text('Se solicita soporte en el aula: ' + data.aula + ' del piso: ' + data.piso);
                                    $(function () {
                                        $("#dialogo").dialog({
                                            autoOpen: true
                                        });
                                    });
								}
				);
}
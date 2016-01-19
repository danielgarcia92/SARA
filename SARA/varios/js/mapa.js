$( document ).ready(nuevo);

function nuevo() {

	for (var i = 1; i <= 37; i++) {
		$("#p1-" + i).mouseover(function(){
			a = this.id.substring(3,5);
			if ($("#rP" + a).val() != '')
				document.getElementById("alerta").innerHTML = 'Profesor: ' + $("#rP" + a).val() +'\n <br> Curso: '+ $("#rC" + a).val();
			else
				document.getElementById("alerta").innerHTML = '';
		});
		$("#p2-" + i).mouseover(function(){
			a = this.id.substring(3,5);
			a = parseInt(a) + 18;
			if ($("#rP" + a).val() != '')
				document.getElementById("alerta").innerHTML = 'Profesor: ' + $("#rP" + a).val() +'\n <br> Curso: '+ $("#rC" + a).val();
			else
				document.getElementById("alerta").innerHTML = '';
		});
	};

	$("#txtBloque").change(function() {
		ejecutarAjax();
	});

	$("#txtFecha").change(function() {
		ejecutarAjax();
	});
}

function ejecutarAjax(){
	var url = $("#url").val();
	var fecha = $("#txtFecha").val();
	var inicio = $("#txtBloque option:selected").text().substring(0,5) + ':00';
	var datosEnviados = {
		'fecha'		: fecha,
		'inicio'	: inicio
		};

	$.ajax({
		type		: 'POST',
		url			: url + 'auth/visualizacionAulas',
		data		: datosEnviados,
		dataType	: 'json',
		encode		: true
	})
	.done(function (datos) {
		if ( datos.exito && $("#txtFecha").val() != ""){
			for (var i = 1; i < 37; i++) {
				document.getElementById('rP'+ i).value = '';
				document.getElementById('rC'+ i).value = '';
			};
			for (var i = 1; i < 37; i++) {
				var piso = eval("datos.piso"+i);
				var aula = eval("datos.aula"+i);
				var nombre = eval("datos.nombre"+i);
				var curso = eval("datos.curso"+i);
				if (piso == 1){
					document.getElementById('rP'+ aula).value = nombre;
					document.getElementById('rC'+ aula).value = curso;
				}
				if (piso == 2){
					aula = parseInt(aula) + 18;
					document.getElementById('rP'+ aula).value = nombre;
					document.getElementById('rC'+ aula).value = curso;

				}
				if (i < 19)
					document.getElementById('p1-'+ i).style.backgroundColor = 'green';
				else{
					var ni = i - 18;
					document.getElementById('p2-'+ ni).style.backgroundColor = 'green';
				};
			};

			var date = new Date();
			hora = date.getHours();
			ano = date.getFullYear();
			mes = date.getMonth() + 1;
			dia = date.getDate();
			if (hora % 2 != 0) {
				hora = parseInt(hora);
				hora = hora - 1;
			};
			if (hora < 9)
				hora = '0'+hora+':00:00';
			else
				hora = hora+':00:00';
			if (mes < 10)
				mes = '0'+mes;
			if (dia < 10)
				dia = '0'+dia;

			var fechaActual = ano+'-'+mes+'-'+dia;
			
			if (hora == inicio && fechaActual == fecha){
				for (var i = 1; i <= datos.numFilasV; i++) {
					var piso = eval("datos.piso"+i);
					var aula = eval("datos.aula"+i);
					if (piso == 1)
						document.getElementById('p1-'+ aula).style.backgroundColor = 'yellow';
					else
						document.getElementById('p2-'+ aula).style.backgroundColor = 'yellow';
				};
			}else{
				for (var i = 1; i <= datos.numFilasV; i++) {
					var aula = eval("datos.aula"+i);
					var piso = eval("datos.piso"+i);
					if (piso == 1)
						document.getElementById('p1-'+ aula).style.backgroundColor = 'darkorange';
					else
						document.getElementById('p2-'+ aula).style.backgroundColor = 'darkorange';
				};

			}

			for(var i = 1; i < 37; i++) {
				var estado = eval("datos.estado"+i);
				var alerta = eval("datos.alerta"+i);
				if (estado == 0){
					if (i < 19)
						document.getElementById('p1-'+ i).style.backgroundColor = 'gray';
					else{
						var ni = i - 18;
						document.getElementById('p2-'+ ni).style.backgroundColor = 'gray';
					};
				};
				if (alerta == 1){
					if (i < 19)
						document.getElementById('p1-'+ i).style.backgroundColor = 'red';
					else{
						var ni = i - 18;
						document.getElementById('p2-'+ ni).style.backgroundColor = 'red';
					};
				};	
			};

		}else{
			$.ajax({
				type		: 'POST',
				url			: url + 'auth/visualizacionAulasFalso',
				dataType	: 'json',
				encode		: true
			})
			.done(function (datos) {
				for(var i = 1; i < 37; i++) {
					var estado = eval("datos.estado"+i);
					var alerta = eval("datos.alerta"+i);
					document.getElementById('rP'+ i).value = '';
					document.getElementById('rC'+ i).value = '';
					if (estado == 0){
						if (i < 19)
							document.getElementById('p1-'+ i).style.backgroundColor = 'gray';
						else{
							var ni = i - 18;
							document.getElementById('p2-'+ ni).style.backgroundColor = 'gray';
						};
					}else{
						if (i < 19)
							document.getElementById('p1-'+ i).style.backgroundColor = 'green';
						else{
							var ni = i - 18;
							document.getElementById('p2-'+ ni).style.backgroundColor = 'green';
						};
					};
					if (alerta == 1){
						if (i < 19)
							document.getElementById('p1-'+ i).style.backgroundColor = 'red';
						else{
							var ni = i - 18;
							document.getElementById('p2-'+ ni).style.backgroundColor = 'red';
						};
					}	
				};
			});
		};

	});

}
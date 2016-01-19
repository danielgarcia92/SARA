<!DOCTYPE html>
<html lang="es">

	<head>
		
		<meta charset="utf-8">
		<title>SARA :: Mapa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="http://localhost/SARA/assets/css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://localhost/SARA/varios/css/layout.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
		<script src="http://localhost/SARA/varios/js/mapa.js"></script>
		<script src="http://localhost/SARA/varios/js/pusher.min.js"></script>
		<script src="http://localhost/SARA/varios/js/rtch2.js"></script>
		<script>
			$(function () {
				$("#dialogo").dialog({
				autoOpen: false
				});
			});
		</script>
		
	</head>

	<body>
		<input type="hidden" id="url"/>  <input type="hidden" id="rP1"/>  <input type="hidden" id="rP2"/>  <input type="hidden" id="rP3"/>  <input type="hidden" id="rP4"/> 
		<input type="hidden" id="rP5"/>  <input type="hidden" id="rP6"/>  <input type="hidden" id="rP7"/>  <input type="hidden" id="rP8"/>  <input type="hidden" id="rP9"/> 
		<input type="hidden" id="rP10"/> <input type="hidden" id="rP11"/> <input type="hidden" id="rP12"/> <input type="hidden" id="rP13"/> <input type="hidden" id="rP14"/> 
		<input type="hidden" id="rP15"/> <input type="hidden" id="rP16"/> <input type="hidden" id="rP17"/> <input type="hidden" id="rP18"/> <input type="hidden" id="rP19"/> 
		<input type="hidden" id="rP20"/> <input type="hidden" id="rP21"/> <input type="hidden" id="rP22"/> <input type="hidden" id="rP23"/> <input type="hidden" id="rP24"/> 
		<input type="hidden" id="rP25"/> <input type="hidden" id="rP26"/> <input type="hidden" id="rP27"/> <input type="hidden" id="rP28"/> <input type="hidden" id="rP29"/>
		<input type="hidden" id="rP30"/> <input type="hidden" id="rP31"/> <input type="hidden" id="rP32"/> <input type="hidden" id="rP33"/> <input type="hidden" id="rP34"/> 
		<input type="hidden" id="rP35"/> <input type="hidden" id="rP36"/> <input type="hidden" id="rC1"/>  <input type="hidden" id="rC2"/>  <input type="hidden" id="rC3"/> 
		<input type="hidden" id="rC4"/>  <input type="hidden" id="rC5"/>  <input type="hidden" id="rC6"/>  <input type="hidden" id="rC7"/>  <input type="hidden" id="rC8"/> 
		<input type="hidden" id="rC9"/>  <input type="hidden" id="rC10"/> <input type="hidden" id="rC11"/> <input type="hidden" id="rC12"/> <input type="hidden" id="rC13"/> 
		<input type="hidden" id="rC14"/> <input type="hidden" id="rC15"/> <input type="hidden" id="rC16"/> <input type="hidden" id="rC17"/> <input type="hidden" id="rC18"/> 
		<input type="hidden" id="rC19"/> <input type="hidden" id="rC20"/> <input type="hidden" id="rC21"/> <input type="hidden" id="rC22"/> <input type="hidden" id="rC23"/> 
		<input type="hidden" id="rC24"/> <input type="hidden" id="rC25"/> <input type="hidden" id="rC26"/> <input type="hidden" id="rC27"/> <input type="hidden" id="rC28"/> 
		<input type="hidden" id="rC29"/> <input type="hidden" id="rC30"/> <input type="hidden" id="rC31"/> <input type="hidden" id="rC32"/> <input type="hidden" id="rC33"/> 
		<input type="hidden" id="rC34"/> <input type="hidden" id="rC35"/> <input type="hidden" id="rC36"/>
		<script type="text/javascript"> document.getElementById("url").value = '<?= base_url(); ?>'; </script>
		<img src="http://localhost/SARA/imagenes/udea.ico">
		<nav class="twitter"><a href="/"><?php echo anchor('auth/index','Volver' )?> | <?=anchor(base_url().'auth/logout', 'Cerrar sesión')?></a></nav>

		<div>
			<div class='col-md-3'></div>

			<div id='piso1' class='col-md-3 tableros'>
				<font color="white" > PISO 1 </font>
				<table class="site" id='tablapiso1'>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p1-1' >1</button>
						<button style='width:40px; color: black' type='button' id='p1-3' >3</button>
						<button style='width:40px; color: black' type='button' id='p1-5'>5</button>
						<button style='width:40px; color: black' type='button' id='p1-7'>7</button>
						<button style='width:40px; color: black' type='button' id='p1-9'>9</button>
					</td>
					<td style='width:40px; background-color: #403621'></td>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p1-2'>2</button>
						<button style='width:40px; color: black' type='button' id='p1-4'>4</button>
						<button style='width:40px; color: black' type='button' id='p1-6'>6</button>
						<button style='width:40px; color: black' type='button' id='p1-8'>8</button>
					</td>
					<td style='width:40px; background-color: #403621'>
						<div style='width:40px; height:160px; background-color: #000000'></div>
					</td>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p1-17'>17</button>
						<button style='width:40px; color: black' type='button' id='p1-15'>15</button>
						<button style='width:40px; color: black' type='button' id='p1-13'>13</button>
						<button style='width:40px; color: black' type='button' id='p1-11'>11</button>
					</td>
					<td style='width:40px; background-color: #403621'></td>
					<td style='width:40px; background-color: #403621'>
						<div style='width:40px; height:20px; background-color: #403621'></div>
						<button style='width:40px; color: black' type='button' id='p1-18'>18</button>
						<button style='width:40px; color: black' type='button' id='p1-16'>10</button>
						<button style='width:40px; color: black' type='button' id='p1-14'>14</button>
						<button style='width:40px; color: black' type='button' id='p1-12'>12</button>
						<button style='width:40px; color: black' type='button' id='p1-10'>10</button>
						<div style='width:40px; height:20px; background-color: #403621'></div>
					</td>		
				</table>
			</div>

			<div id='piso2' class='col-md-3 tableros'>
				<font color="white" > PISO 2 </font>
				<table class="site" id='tablapiso2'>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p2-1'>1</button>
						<button style='width:40px; color: black' type='button' id='p2-3'>3</button>
						<button style='width:40px; color: black' type='button' id='p2-5'>5</button>
						<button style='width:40px; color: black' type='button' id='p2-7'>7</button>
						<button style='width:40px; color: black' type='button' id='p2-9'>9</button>
					</td>
					<td style='width:40px; background-color: #403621'></td>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p2-2'>2</button>
						<button style='width:40px; color: black' type='button' id='p2-4'>4</button>
						<button style='width:40px; color: black' type='button' id='p2-6'>6</button>
						<button style='width:40px; color: black' type='button' id='p2-8'>8</button>
					</td>
					<td style='width:40px; background-color: #403621'>
						<div style='width:40px; height:160px; background-color: #000000'></div>
					</td>
					<td style='width:40px; background-color: #403621'>
						<button style='width:40px; color: black' type='button' id='p2-17'>17</button>
						<button style='width:40px; color: black' type='button' id='p2-15'>15</button>
						<button style='width:40px; color: black' type='button' id='p2-13'>13</button>
						<button style='width:40px; color: black' type='button' id='p2-11'>11</button>
					</td>
					<td style='width:40px; background-color: #403621'></td>
					<td style='width:40px; background-color: #403621'>
						<div style='width:40px; height:20px; background-color: #403621'></div>
						<button style='width:40px; color: black' type='button' id='p2-18'>18</button>
						<button style='width:40px; color: black' type='button' id='p2-16'>10</button>
						<button style='width:40px; color: black' type='button' id='p2-14'>14</button>
						<button style='width:40px; color: black' type='button' id='p2-12'>12</button>
						<button style='width:40px; color: black' type='button' id='p2-10'>10</button>
						<div style='width:40px; height:20px; background-color: #403621'></div>
					</td>		
				</table>
			</div>

			<div class='col-md-3 tableros' style='width:300px; color: black;'>
				<font color="white" for="txtBloque">Bloque de 2 horas</font>
				<select class="form-control" id="txtBloque">
					<option value="1">Escoja un bloque de 2 horas</option>
					<option value="2">06:00 - 08:00</option>
					<option value="3">08:00 - 10:00</option>
					<option value="4">10:00 - 12:00</option>
					<option value="5">12:00 - 14:00</option>
					<option value="6">14:00 - 16:00</option>
					<option value="7">16:00 - 18:00</option>
					<option value="8">18:00 - 20:00</option>
					<option value="9">20:00 - 22:00</option>
				</select>
			</div>

			<div class='col-md-3 tableros' style='width:300px;'>
				<font color="white" for="txtFecha">Fecha</font>
				<input id="txtFecha" type="text" />
				<script type="text/javascript"> 
					$("#txtFecha").datepicker({ dateFormat: 'yy-mm-dd' });
				</script>
			</div>

		</div>

	</body>

	<div id="dialogo" title="ATENCIÓN!!!">
  			<p id="pDialogo"></p>
	</div>

	<font color="white" id="alerta"></font>
	<font color="white" id="qqq"></font>

</html>
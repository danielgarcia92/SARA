<?php
require('Pusher.php');

$key="ff4b6a8b1f92ee1509c2";
$secret="04efc79af459c846ff82";
$app_id="160373";

$valor=(isset($_POST['valor']))?$_POST['valor']:0;
$piso=(isset($_POST['piso']))?$_POST['piso']:0;
$aula=(isset($_POST['aula']))?$_POST['aula']:0;
$channel=(isset($_POST['channel']))?$_POST['channel']:0;
$pusher = new Pusher($key, $secret, $app_id);

if($channel!=0){
	$pusher->trigger('rtch'.$channel, 'actualizar', array('piso' => $piso, 'aula' => $aula) );
	exit;
}
else{
	$pusher->trigger('rtch1', 'actualizar', array('valor' => $valor) );	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sensor 1</title>
		<meta charset="UTF-8" />	
	</head>
	<body>
		<div class='centrado'>
			<form method='post'>
				<input name='valor' type='text' size='4' maxlength='4'>&nbsp;<input type='submit' value='Enviar'>
			</form>
	  	</div>
	</body>
</html>
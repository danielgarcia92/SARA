<!DOCTYPE html>
<html lang="es">

	<head>
		
		<meta charset="utf-8">
		<title>SARA :: Soporte</title>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >
    <link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
		<script src="http://localhost/SARA/varios/js/pusher.min.js"></script>	
		<script src='http://localhost/SARA/varios/js/rtch1.js'></script>

	</head>

	<body>
		<input type="hidden" id="piso"/>
		<input type="hidden" id="aula"/>

        
        
		<script type="text/javascript">
            
          
            
            
            
			document.getElementById("piso").value = "<?= $_GET['piso'] ?>";
			document.getElementById("aula").value = "<?= $_GET['aula'] ?>";
		</script>
	</body>

</html>
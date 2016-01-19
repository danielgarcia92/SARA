<!doctype html>
<html>
<head>
    	  

    
    <title>SARA :: Menu profesor</title>
    		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >

    	  
<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />


</head>
<body>
    
   Bienvenido profesor
    
    <br>
    <br>
    
    Por favor seleccione una opción
    
    
 
    

    <p><?php echo anchor('auth/reserv', 'Reservar aula')?> | <?php echo anchor('auth/cancelar_reserva', 'Cancelar reserva')?> | <?php echo anchor('auth/logout', lang('index_logout'))?>  
    </p>
    

</body>
</html>
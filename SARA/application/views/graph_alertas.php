<!doctype html>
<html>
	<head>
		<title>SARA :: Informe de alertas</title>
        
        
        
        		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >

		<meta charset="UTF-8">
		
        <link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />

        
     <script type="text/javascript">
        
     
  var iluminacion=<?php echo $total[0]?>;
  var encendida=<?php echo $total[1]?>;
  var equipo=<?php echo $total[2]?>;
  var puerta=<?php echo $total[3]?>;
  var aulaabierta=<?php echo $total[4]?>;
    var piso=<?php echo $total[5]?>;
  var aula=<?php echo $total[6]?>;
  var year=<?php echo $total[7]?>;
  var mes=<?php echo $total[8]?>;

  
 
      
        </script>

        
        <script src="http://localhost/SARA/js/jquery.min.js"></script>
		<script src="http://localhost/SARA/js/graph_alert.js"></script>	
		<script src='http://localhost/SARA/js/highcharts.js'></script>
		

	</head>
    
   <br>         <br>
        <b>

	<body>
		<div id="container" style="width:100%; height:400px;"></div>
		<div class='centrado'>
			
		</div>
        
     <p><?php echo anchor('auth/alertas_graph_consult','Realizar otra consulta' )?> | <?php echo anchor('auth/index','Regresar al menu' )?> | <?php echo anchor('auth/logout', lang('index_logout'))?>   
        
	</body>
</html1
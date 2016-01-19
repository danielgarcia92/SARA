<!doctype html>
<html>
	<head>
		<title>SARA :: Informe de uso de aulas</title>
        
        
        
        
        		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >

		<meta charset="UTF-8">
        
        <link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />

		
     <script type="text/javascript">
        
     
  var enero=<?php echo $total[1]?>;
  var febrero=<?php echo $total[2]?>;
  var marzo=<?php echo $total[3]?>;
  var abril=<?php echo $total[4]?>;
  var mayo=<?php echo $total[5]?>;
  var junio=<?php echo $total[6]?>;
  var julio=<?php echo $total[7]?>;
  var agosto=<?php echo $total[8]?>;
  var septiembre=<?php echo $total[9]?>;
  var octubre=<?php echo $total[10]?>;
  var noviembre=<?php echo $total[11]?>;
  var diciembre=<?php echo $total[12]?>;
  var piso=<?php echo $total[13]?>;
  var aula=<?php echo $total[14]?>;
  var year=<?php echo $total[15]?>;
  
 
      
        </script>

        
        <script src="http://localhost/SARA/js/jquery.min.js"></script>
		<script src="http://localhost/SARA/js/graph.js"></script>	
		<script src='http://localhost/SARA/js/highcharts.js'></script>
		

	</head>
	<body>
        
        <br>         <br>
        <br>

		<div id="container" style="width:100%; height:400px;"></div>
		<div class='centrado'>
			
		</div>
        
   <p><?php echo anchor('auth/aulas_graph_consult','Realizar otra consulta' )?> | <?php echo anchor('auth/index','Regresar al menu' )?> | <?php echo anchor('auth/logout', lang('index_logout'))?>       
        
	</body>
</html1
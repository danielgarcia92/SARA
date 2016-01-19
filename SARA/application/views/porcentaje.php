<!DOCTYPE html>
<html lang="es">

  <head>
    
    <meta charset="utf-8">
    <title>SARA :: Consulta de porcentaje de uso de aulas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >
    <link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />
    
    <style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      font-weight: bold;
  }
  
</style>

<p class="paragraph1">Consulta de aulas</p>


</head>
<body>
    
    <form action="porcentaje_graph" method="post">
  Piso:<br>
   <select name="piso">
    
    <option value="1">Piso 1</option>
  <option value="2">Piso 2</option>
        
    </select> <br>
   
         Aula:<br>
 <select name="aula">
    
    <option value="1">1</option>
    <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
     <option value="13">13</option>
     <option value="14">14</option>
     <option value="15">15</option>
     <option value="16">16</option>
     <option value="17">17</option>
     <option value="18">18</option>
     
        
    </select> <br>    
        
        
        Año:<br>
 <input type="year" name="año" ><br>      
  
  <input type="submit" value="Consultar">
</form>

    <p><?php echo anchor('auth/index','Volver' )?> | <?php echo anchor('auth/logout', lang('index_logout'))?>  
    </p>
    
    

</body>
</html>
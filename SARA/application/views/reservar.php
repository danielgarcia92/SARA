<!doctype html>
<html>
<head>
    	  

    
    <title>SARA :: Reservas</title>
    
    <style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      font-weight: bold;
  }
  
</style>

<p class="paragraph1">Reservas</p>
    
    	  		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >

<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />


</head>
<body>
    
    
    
    
    <form action="crear" method="post">
 
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
         Hora:<br>
 <select name="hora">
    
         <option value="06:00:00">06:00:00 - 08:00:00</option>
    <option value="08:00:00">08:00:00 - 10:00:00</option>
  <option value="10:00:00">10:00:00 - 12:00:00</option>
     <option value="12:00:00">12:00:00 - 14:00:00</option>
     <option value="14:00:00">14:00:00 - 16:00:00</option>
     <option value="16:00:00">16:00:00 - 18:00:00</option>
     <option value="18:00:00">18:00:00 - 20:00:00</option>
     <option value="20:00:00">20:00:00 - 22:00:00</option>
    <br>
           
    </select> <br>  
     Fecha:<br>
 <input type="date" name="fecha" ><br>
     
   Curso:<br>
 <input type="text" name="curso" ><br>
  
  <input type="submit" value="Reservar">
</form>

    <p><?php echo anchor('auth/index','Regresar al menu' )?> | <?php echo anchor('auth/logout', lang('index_logout'))?>  
    </p>
    

    <?php

 
if(isset($_SESSION['mensaje'])){
$mensaje=$_SESSION['mensaje'];
echo($mensaje);
   
session_destroy();
}
?>
    
</body>
</html>
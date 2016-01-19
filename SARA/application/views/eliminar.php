
<!doctype html>
<html>
<head>
    
    <title>SARA :: Eliminar usuario</title>
    
    <style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      font-weight: bold;
  }
  
</style>

<p class="paragraph1">Ingresar</p>
    
    	  		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >

<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />

</head>

<form action="eliminar_funcion" method="post">
  Escriba el email del usuario que desea eliminar:<br>
    
   
    
  <input type="text" name="user" ><br>
  
  <input type="submit" value="Eliminar">
</form>

<p> <?php echo anchor('auth/index','Volver' )?> | <?php echo anchor('auth/logout', lang('index_logout'))?>  </p>
   
   
   
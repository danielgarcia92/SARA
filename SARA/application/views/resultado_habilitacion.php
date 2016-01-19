      
<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />
    <title>SARA :: Resultado</title>


<style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      font-weight: bold;
  }
  
</style>

<p class="paragraph1">Resultado de la solicitud</p>

		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >


<?php
        print "<pre>";

      
        echo($reserva);
        
        
        ?>

 <p><?php echo anchor('auth/habilitar', 'Habilitar un aula')?> | <?php echo anchor('auth/deshabilitar', 'Dehabilitar un aula')?> | <?php echo anchor('auth/logout', lang('index_logout'))?>  
    </p>
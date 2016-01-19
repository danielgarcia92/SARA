
<title>SARA :: Login</title>
		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >
<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />


<style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      text-align: center;
      font-weight: bold;
  }
    
    .paragraph2 {
      text-align: center;
  }
  
    .p3 {
      text-align: center;
  }
</style>

<p class="paragraph1">Ingresar</p>

<p class="paragraph2"><?php echo lang('login_subheading');?></p>

<div class="p3" id="infoMessage"> 
 <p class="p3">    <?php echo $message;?> </p></div>


<?php echo form_open("auth/login");?>

  <p class="p3">
    Email: <br>
    <?php echo form_input($identity);?>
  </p>

  <p class="p3">
Contraseña: <br>
      <?php echo form_input($password);?>
  </p>

 


  <p class="p3"><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

 <p class="p3" id='msj'></p>

<?php echo form_close();?>

<?php

 if(isset($user)) echo($user);
if(isset($_SESSION['p'])){ 
$p=$_SESSION['p']; ?>
<p class="p3"><?php echo($p); ?></p>
   
<?php 
    session_destroy();
}
?>


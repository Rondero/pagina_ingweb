<?php
$matricula=$_POST['matricula'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['matricula']=$matricula;

$conexion=mysqli_connect("localhost","root","","prueba1");

$consulta="INSERT*INTO usuario where matricula='$matricula' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$files=mysqli_num_rows($resultado);

if($files){
    header("location:principalv2.html");

}else{
    ?>
      	<div class="alert alert-danger " role="alert">
  	    ¡Error de autenticación!,verifique su matricula y contraseña!
	    </div>
    <?php
    include("logIn.php");
    ?>
    
    <div class="alert alert-danger " role="alert">
  	 ¡Error de autenticación!,verifique su matricula y contraseña!
	</div>
	
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
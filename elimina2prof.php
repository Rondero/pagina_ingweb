<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $id=$_GET['idprofesor'];
//   echo "el valor es : $id";  
   mysqli_query($link,"delete from profesor where idprofesor = '$id'"); 
   header("Location: EliminaProf.php"); 
?> 
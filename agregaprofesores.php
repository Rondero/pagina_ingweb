<?php
if(isset($_POST['registro'])){
    $nom_profe=$_POST['nom_profe'];
    $pat_profe=$_POST['pat_profe'];
    $mat_profe=$_POST['mat_profe'];
    $celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$ingreso=$_POST['ingreso'];
	$grado=$_POST['grado'];
    echo "Datos agregados";
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"prueba1");
    mysqli_query($link,"insert into profesor (nom_profe,pat_profe,mat_profe,celular,correo,ingreso,grado) values ('$nom_profe','$pat_profe','$mat_profe','$celular','$correo','$ingreso','$grado')");
}
	
?>

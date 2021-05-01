<?PHP
if(isset($_POST['ingresar'])){
    session_start();
    $matricula=$_REQUEST['matricula'];
    $password=$_REQUEST['contraseña'];

    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"prueba1"); 
     $result = mysqli_query($link,'SELECT password,matricula,admin_idadmin,profesor_idprofesor FROM login_usu WHERE matricula=\''.$matricula.'\'');
     if($row = mysqli_fetch_array($result))
        {
          if($row["password"] == $password)
             {
              session_start();
             $_SESSION["matricula"] = $row['matricula'];
              echo "Has sido logueado correctamente:";
              //header("location:principalv2.html");
              if($row['admin_idadmin'] > 499)
               header("Location:intefadmi.html");
               else
              if($row['profesor_idprofesor'] < 500) 
              header("Location:infoProfesv2.html");
             }
          else 
          echo "Error de autenticacion";
        }
}	
?>
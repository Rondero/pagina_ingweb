<!DOCTYPE html>
<html lang="es">
<head>      
	<title>Información</title>
	<meta name="viewport" content="width=device, user-scalabe=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/styles1.css">
  <link rel="stylesheet" type="text/css" href="css/stylesss.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script LANGUAGE="JavaScript">
        function confirmSubmit()
        {
        var eli=confirm("Esta seguro de eliminar este registro?");
        if (eli) return true ;
        else return false ;
        }
  </script>
</head>
<body>
	
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="principalv2.html">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infoProfesv2.html">Información</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Materias.html">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ayuda.html">Ayuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="salir.php" tabindex="-1" aria-disabled="true">Salir</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
        <div class="contenedor-tabla">

            <h2>Elimina Profesor</h2>
            <?php 
                include("conexion.php"); 
                $link=Conectarse(); 
                $result=mysqli_query($link,"select * from profesor"); 
            ?> 
            <div>
                <div class="tabla">
                    <table border="1">
                        <tr>         
                            <td><b>ID</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Eliminar</b></td>
                        </tr>
    <?php       
        while($row = mysqli_fetch_array($result)) 
        { 
            $nom=$row["nom_profe"];
            //$mat=$row["matricula"];
            $id=$row["idprofesor"];
            printf("<tr><td>%d</td><td>%s</td><td><center>
            <a onclick=\"return confirmSubmit()\"href=\"elimina2prof.php?idprofesor=%s\"><img src='eliminar.bmp' width='25' height='25' border='0'></a>
         </center>
             </td>
            </tr>",$id,$nom,$id); 
        } 

        mysqli_free_result($result); 
        mysqli_close($link); 
    ?>    
                    </table>
                </div>
            </div> 
        </div>
  </body>
  </html>
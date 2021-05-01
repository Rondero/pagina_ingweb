<!DOCTYPE html>
<html lang="es">
<head>
	<title>Servicios</title>
	<meta name="viewport" content="width=device, user-scalabe=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styless.css">
</head>
<body>
	
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principalv2.html">INICIO</a>
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


  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Servicios</h3>
          
        </div>
        <div class="card-body">
        <div class="mb-3">
        <label for="formFile" class="form-label">Seleccione Listado de Materias .docx</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        
        </div>
        <div class="card-footer">
        <div class="form-group">
						<input type="submit" value="Guardar" class="btn float-right login_btn">
					</div>
          <div class="d-flex justify-content-center">
          
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
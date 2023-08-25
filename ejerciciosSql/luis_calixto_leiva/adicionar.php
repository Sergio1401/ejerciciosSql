<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Luis Calixto Leiva</title>

  </head>

  <body class="text-center">

    <?php require 'configurar.php'; 

     if(isset($_POST['nombre_alumno']) && empty ($_POST['nombre_alumno']) == false) { 

    $nombre_alumno = addslashes($_POST['nombre_alumno']);
    $nombre_tarea = addslashes($_POST['nombre_tarea']);
    $descripcion_tarea = addslashes($_POST['descripcion_tarea']);
    $fecha_inicio = addslashes($_POST['fecha_inicio']);
    $fecha_final = addslashes($_POST['fecha_final']);

    $insertarusuario = "INSERT INTO luis_calixto_leiva SET nombre_alumno = '$nombre_alumno', nombre_tarea = '$nombre_tarea', descripcion_tarea = '$descripcion_tarea', fecha_inicio = '$fecha_inicio', fecha_final = '$fecha_final'";

    header("Location: index.php");

    }

    ?>    
    <form method="post" class="form-signin">
      <input type="nombre" class="form-control" placeholder="Nombre" name="Nombre" required autofocus>      
      <input type="email" class="form-control" placeholder="e-mail" name="email" required>
      <input type="number" class="form-control" placeholder="telefono" name="telefono" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registar nueva tarea</button>
      <p class="mt-5 mb-3 text-muted">&copy; </p>
    </form>
  </body>

</html>
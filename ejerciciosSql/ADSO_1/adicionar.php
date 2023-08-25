<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Usuarios</title>

  </head>

  <body class="text-center">

    <?php require 'config.php'; 

     if(isset($_POST['Nombre']) && empty ($_POST['Nombre']) == false) { 

    $Nombre = addslashes($_POST['Nombre']);
    $email = addslashes($_POST['email']);
    $telefono = addslashes($_POST['telefono']);

    $insertarusuario = "INSERT INTO usuarios SET Nombre = '$Nombre', email = '$email', telefono = '$telefono'";
    $pdo->query($insertarusuario);

    header("Location: index.php");

    }

    ?>    
    <form method="post" class="form-signin">
      <input type="nombre" class="form-control" placeholder="Nombre" name="Nombre" required autofocus>      
      <input type="email" class="form-control" placeholder="e-mail" name="email" required>
      <input type="number" class="form-control" placeholder="telefono" name="telefono" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registar nuevo usuario</button>
      <p class="mt-5 mb-3 text-muted">&copy; </p>
    </form>
  </body>

</html>
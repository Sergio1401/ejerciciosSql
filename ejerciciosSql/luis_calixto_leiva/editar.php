<?php

require 'configurar.php';

$id = 0;

if(isset($_POST['nombre_alumno']) && empty ($_POST['nombre_alumno']) == false) {
       $id = $_POST['id'];
       $nombre_alumno = addslashes($_POST['nombre_alumno']);
       $nombre_tarea = addslashes($_POST['nombre_tarea']);
       $descripcion_tarea = addslashes($_POST['descripcion_tarea']);
       $fecha_inicio = addslashes($_POST['fecha_inicio']);
       $fecha_final = addslashes($_POST['fecha_final']);
      
       $actualizarTarea = "UPDATE luis_calixto_leiva SET nombre_alumno = '$nombre_alumno', nombre_tarea = '$nombre_tarea', descripcion_tarea = '$descripcion_tarea', fecha_inicio = '$fecha_inicio', fecha_final = '$fecha_final'";
       $pdo->query($actualizarTarea);

       header("Location: index.php");
}

?>
<?php 

require 'configurar.php';

if(isset($_GET['id']) && empty ($_GET['id']) == false) { 
    $id = addslashes($_GET['id']);

    $deleteTarea = "DELETE FROM luis_calixto_leiva WHERE id = '$id'";
    $pdo->query($deleteTarea);

    header("Location: index.php");

}else{
    header("Location: index.php");
}

?>
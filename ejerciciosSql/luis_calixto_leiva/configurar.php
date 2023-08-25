<?php

$dsn = "mysql:dbname=institucion;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO ($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "faulhou: ".$e->getMessage();
}
?>
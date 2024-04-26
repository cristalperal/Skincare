<?php

require 'db_conexion.php';
$id = $_GET['rn']; 

$query= "DELETE FROM producto WHERE id = '$id'";
$data = mysqli_query($conectar, $query); 
header("location:./form.php?insert=success");

?>

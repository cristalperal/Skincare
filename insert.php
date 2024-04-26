<?php

require 'db_conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$disponibilidad = $_POST['disponibilidad'];

$insert = "INSERT INTO producto (nombre, descripcion, marca, categoria, precio, disponibilidad) 
           VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conectar, $insert);
mysqli_stmt_bind_param($stmt, "ssssdi", $nombre, $descripcion, $marca, $categoria, $precio, $disponibilidad);
mysqli_stmt_execute($stmt);

header("location:./form.php?insert=success");
?>

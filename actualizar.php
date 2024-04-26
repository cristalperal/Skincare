<?php

require 'db_conexion.php';
$id = $_POST['id'];

if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $query = "UPDATE producto SET nombre='$_POST[nombre]',descripcion='$_POST[descripcion]',marca ='$_POST[marca]', categoria='$_POST[categoria]', precio='$_POST[precio]', disponibilidad='$_POST[disponibilidad]' where id='$_POST[id]'";
    mysqli_query($conectar, $query);
}


header("location:./form.php?insert=success");

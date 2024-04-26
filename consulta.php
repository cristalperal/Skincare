<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css.css"> 
</head>
<body>
    
<h3>Pruducto buscado </h3>

<table border="2">

   <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Categoria</th>
        <th>Precio</th>
        <th>Disponibilidad</th>
    </tr>


<?php
require 'db_conexion.php';

$marca = $_POST['id'];

$query ="SELECT * FROM producto where marca ='$marca'";
$data = mysqli_query($conectar, $query);
$total = mysqli_num_rows($data);

if($total!=0){

    while($row=mysqli_fetch_assoc($data)){

    echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . 
    "</td> <td>" . $row['descripcion'] .  "</td> <td>" . $row['marca'] . 
    "</td> <td>" . $row['categoria'] ."</td> <td>" . $row['precio'] . 
    "</td> <td>" . $row['disponibilidad'] . "</td> <td>";

        }

}
?>
</table>
</body>
</html>
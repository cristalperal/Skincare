<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="css_update.css">
</head>



<?php
require 'db_conexion.php';
$id = $_POST['id'];

$sql = "SELECT * FROM producto where id=$id;";

$result = mysqli_query($conectar, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion'];
    $marca = $row['marca'];
    $categoria = $row['categoria'];
    $precio = $row['precio'];
    $disponibilidad = $row['disponibilidad'];
} else {
    // Si no se encuentra ningún producto con el ID proporcionado, puedes definir valores predeterminados o redirigir a una página de error.
    $nombre = "";
    $descripcion = "";
    $marca = "";
    $categoria = "";
    $precio = "";
    $disponibilidad = "";
}
?>

<div class="container">


<form action="actualizar.php" method="post">
    <label for="">ID</label>
    <input type="text" name="id" value="<?php echo $id ?>">

    <label for="">Nombre</label>
    <input type="text" name="nombre" value="<?php echo $nombre ?>">

    <label for="">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $descripcion ?>">

    <label for="">Marca</label>
    <input type="text" name="marca" value="<?php echo $marca ?>">

    <label for="">Categoria</label>
    <input type="text" name="categoria" value="<?php echo $categoria ?>">

    <label for="">Precio</label>
    <input type="text" name="precio" value="<?php echo $precio ?>">

    <label for="">Disponibilidad</label>
    <input type="text" name="disponibilidad" value="<?php echo $disponibilidad ?>">

    <button type="submit" name="update">Editar</button>
</form>
</div>
    
</body>

</html>
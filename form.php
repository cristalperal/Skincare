<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>   
    <link rel="stylesheet" href="css.css"> 
</head>
<body> 

<center>
<h1>AMUZE</h1><h2>Skincare</h2>



</center>
 
<!-- aqui se va a buscar el producto -->

<form action="consulta.php" method="POST">
  <label for="id">Buscar la marca del  producto </label>
  <input type="text" name="id" id="id" placeholder="Buscar producto"> 
  <input type="submit" value="Buscar">
</form>

<!-- el formulaario para insertar en insert.php para eue no se me olvide -->

<form action="insert.php" method="POST">
 <div id="texprin"><h2>Formulario de Producto</h2></div> 

  <label for="nombre">Nombre producto:</label>
  <input type="text" name="nombre" id="nombre"> 

  <label for="descripcion">Descripcion del Producto:</label>
  <textarea type="text" name="descripcion" id="descripcion"> </textarea>

<!-- para elegir la marca del producto -->

<label for="marca">Eliga la marca del producto:</label>
<select name="marca" id="marca">
<option value="Cetaphil" selected>Cetaphil</option>
<option value="CeraVe" selected>CeraVe</option>
<option value="LaRoche-Posay" selected>La Roche-Posay</option>
<option value="Neutrogena" selected>Neutrogena</option>
</select>
</div>

<!-- para elegir la categoria del producto -->

<label for="categoria">Eliga la categoria del producto:</label>
<select name="categoria" id="categoria">
<option value="Limpiador Facial " selected>Limpiador Facial </option>
<option value="Crema Hidratante" selected>Crema Hidratante</option>
<option value="Loción Limpiadora" selected>Loción Limpiadora</option>
<option value="Protector Solar" selected>Protector Solar</option>
<option value="Serum " selected>Serum</option>
<option value="Jabón Facial " selected>Jabón Facial </option>
</select>
</div>

<!-- para el precio del producto -->

<label for="precio">Precio del producto:</label>
<input type="text" name="precio" id="precio" placeholder="RD"> 


<!-- para elegir la disponibilidad  del producto -->

<label for="disponibilidad">Disponibilidad del producto:</label>
<select name="disponibilidad" id="disponibilidad">
  <option value="1">Disponible</option>
  <option value="0">No Disponible</option>
</select>


<!--
<label for="disponibilidad">Disponibilidad  del producto:</label>
<div class="select-custom">
<select name="disponibilidad" id="disponibilidad ">
<option value="Disponible" selected>Disponible</option>
<option value="Agotado" selected>Agotado</option>  
</select>
</div> --> 

<input type="submit" value="Enviar">
</form>

  <!-- Para actualizar   -->
  <form action="update_form.php" method="post">
    <div class="form-group">
        <label for="editar">Editar Producto:</label> 
        <input type="text" name="id" placeholder="id del producto" require>
     </div>
    <div class="form-group submit-btn">
     <input type="submit" value="Editar">
    </div>
    </form>
        <!-- aqui termina -->

<div class="container">
    <!-- visualizacion de la tabla y borrar -->
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
</div>
    <?php

require 'db_conexion.php';
$query= "SELECT * FROM producto";
$data = mysqli_query($conectar, $query); 
$total = mysqli_num_rows($data); 

if($total!=0) {
    while($row= mysqli_fetch_assoc($data)){
echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . 
"</td> <td>" . $row['descripcion'] .  "</td> <td>" . $row['marca'] . 
"</td> <td>" . $row['categoria'] ."</td> <td>" . $row['precio'] . 
"</td> <td>" . $row['disponibilidad'] . "</td>
 <td> <a href= 'delete.php?rn=$row[id]'><button >Eliminar</button></td> </tr>";  
}; 
};

?>
</table>


    
</body>
</html>
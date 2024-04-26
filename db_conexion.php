<?php

$conectar=mysqli_connect("localhost","root","","skincare");

if ($conectar->connect_errno) {
echo "Fallo al conectar:
(". $conectar->connect_errno .") ". $conectar->connect_error;

}

?>

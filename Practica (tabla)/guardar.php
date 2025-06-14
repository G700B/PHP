<?php

$n=$_REQUEST['Nombre'];
$a=$_REQUEST['Apellido'];
$d=$_GET['Direccion'];
$l=$_GET['Localidad'];
$t=$_GET['Telefono'];
$c=$_GET['Correo_electronico'];
$r=$_GET['Redes_sociales'];
$f=$_GET['Fecha_nacimiento'];

echo $n;
$SQL="INSERT INTO alumnos (apellido, nombre, direccion, localidad, telefono, correo_electronico, redes_sociales, fecha_nacimiento ) VALUES 
('$a', '$n', '$d', $l, '$t', '$c', '$r', '$f')";
include ('conexion.php');
$con->query($SQL);
?><br>
<h3><i><u>Mire los datos registrados</u></i></h3>
<a href="lista.php">Lista</a>
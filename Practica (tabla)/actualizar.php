<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
$a=$_GET['apellido'];
$n=$_GET['nombre'];
$d=$_GET['direccion'];
$l=$_GET['localidad'];
$t=$_GET['telefono'];
$c=$_GET['correo_electronico'];
$r=$_GET['redes_sociales'];
$f=$_GET['fecha_nacimiento'];
//generar consulta SSQL
$act="UPDATE alumnos SET apellido='$a' , nombre='$n' , direccion='$d' , localidad='$l', telefono=$t , correo_electronico='$c' ,
redes_sociales='$r' , fecha_nacimiento='$f'";
//llamara a la conexion
include('conexion.php');
//EJECUTAMOS
$con->query($act);
header('location:lista.php');


?>

</body>
</html>
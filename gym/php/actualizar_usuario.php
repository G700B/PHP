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
$idu=$_GET['idu'];
$a=$_GET['titulo'];
$n=$_GET['duracion'];
$d=$_GET['genero'];
$l=$_GET['autor'];
$c=$_GET['idioma'];
$f=$_GET['fecha_lanzamiento'];
//generar consulta SSQL
$act="UPDATE series SET titulo='$a' , duracion='$n' , genero='$d' , autor='$l', idioma='$c' , fecha_lanzamiento='$f'  WHERE id=$idu";
//llamara a la conexion
include('conexion.php');
//EJECUTAMOS
$con->query($act);
header('location:lista_musica.php');


?>

</body>
</html>
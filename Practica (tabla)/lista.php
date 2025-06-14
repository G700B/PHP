<?php
include 'conexion.php';
$sel="SELECT * fROM alumnos";
$resultado=$con->query($sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de registros</title>
</head>
<body>
<?php
	include ('conexion.php');
	//$sel="SELECT * FROM ";
	$sel="SELECT alumnos.id, alumnos.nombre, alumnos.apellido, alumnos.direccion, alumnos.localidad,
	 alumnos.telefono, alumnos.correo_electronico, alumnos.redes_sociales, alumnos.fecha_nacimiento,
     localidad.id, localidad.nombre AS locanombre FROM 
     alumnos INNER JOIN localidad ON 
	 localidad.id=alumnos.localidad";
	$ejec=$con->query($sel);
?>
    <h3>Lista de registros</h3>
    <table border=3>
        <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Localidad</th>
            <th>telefono</th>
            <th>Correo electronico</th>
            <th>Redes Sociales</th>
            <th>fecha de nacimiento</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    <?php $cont=0;
while ($fila=$resultado->fetch_assoc()){
    $cont=$cont+1;
    ?>
    <tr>
        <!-- <td><?php echo $cont ?></td> -->
        <td><?php echo $fila['id']?></td>
        <td><?php echo $fila['apellido']?></td>
        <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['direccion']?></td>
        <td><?php echo $fila['localidad']?></td>
        <td><?php echo $fila['telefono']?></td>
        <td><?php echo $fila['correo_electronico']?></td>
        <td><?php echo $fila['redes_sociales']?></td>
        <td><?php echo $fila['fecha_nacimiento']?></td>
        <td><a href='form_mod.php?id=<?php echo $fila['id']?>'>actualizar</a></td>
        <td><a href='eliminar.php?id=<?php echo $fila['id']?>'>Borrar</a></td>
    </tr>
<?php 
}
?>
</table>
Cantidad de registros encontrados: <?php echo $cont ?>
<br>
<a href="formulario.php">Cargas registros</a>
</body>
</html>




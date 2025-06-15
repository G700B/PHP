<?php
include 'conexion.php';
$sel="SELECT * fROM pagos";
$resultado=$con->query($sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logotipo.png">
    <title>Lista de registros</title>
</head>
<body >
    
<style>
td{
    background:#cccc99;
}
th{
    background:#ffcc66;
}
a{
    color: #3333ff;
}
a:hover{
    color:#ff3366
}
    </style>
<div class="colour">
   <center><font size="5"><h3 ><i><u></h3></u></i></font></center>
    <font size="4"><table border=5 bordercolor="white" width="100%" >
        <tr>
            <th>ID</th>
            <th>Usuario_ID</th>
            <th>Usuario</th>
            <th>Plan</th>
            <th>Fecha de Pago</th>
            <th>Metodo de Pago</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    <?php $cont=0;
while ($fila=$resultado->fetch_assoc()){
    $cont=$cont+1;
    ?>
    <tr>
        <!-- <td><?php echo $cont ?></td> -->
        <th><?php echo $fila['id']?></th>
        <td><?php echo $fila['usuario']?></td>
        <td><?php echo $fila['user']?></td>
        
       
        <td><?php echo $fila['plan']?></td>
         <td><?php echo $fila['fecha_pago']?></td>
        <td><?php echo $fila['metodo_pago']?></td>
      
        <td><a href='form_mod_usuario.php?id=<?php echo $fila['id']?>'>actualizar</a></td>
        <td><a href='eliminar_usuario.php?id=<?php echo $fila['id']?>'>Borrar</a></td>
    </tr>
<?php 
}
?>
</table></font>
<h3><u>Cantidad de registros encontrados: <?php echo $cont ?></u></h3>
<br>
<font size="4"><a href="formulario_usuario.php">Cargar registros</a></font>
</body></div>
</html>




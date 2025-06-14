<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
</head>
<body >
    <?php
$id=$_REQUEST['id'];
$sel="SELECT * FROM alumnos WHERE id='$id'";
include 'conexion.php';
$res=$con->query($sel);
$row=$res->fetch_assoc();
?>
<form action="actualizar.php" method="get" >
        <h1 class="titulo">Actualizar</h1>
        
        <input  type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']?>" />
        <input  type="text" name="apellido"  placeholder="Apellido" value="<?php echo $row['apellido']?>" />
        <input  type="text" name="direccion" placeholder="Dirreccion" value="<?php echo $row['direccion']?>" />
        <input  type="text" name="localidad" placeholder="Localidad" value="<?php echo $row['localidad']?>" />
        <select name="ulocalidad">
        //<?php
//while($dato = $resullocal->fetch_assoc()){
   // if ($row["localidad"]==$dato["id"]) {
      // echo "<option selected value'" .$dato["id"]."'>" .$dato["nombre"]." </opion>";
   // }else {
     //   echo "<option value=?".$dato["id"]."'>".$dato["nombre"]."</option>";
   // }
//}
//?>
</select>
        <input  type="number" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']?>" />
        <input  type="text" name="correo_electronico" placeholder="Correo electronico" value="<?php echo $row['correo_electronico']?>" />
        <input  type="text" name="redes_sociales" placeholder="Redes sociales" value="<?php echo $row['redes_sociales']?>" />
        <input  type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?php echo $row['fecha_nacimiento']?>" />
       <br><br>
    
        <input type="submit" class="btn" value="REGISTRAR">

        
        
    </form>


</body>
</html>
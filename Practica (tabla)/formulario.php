<?php
//llamaar a la base
include ('conexion.php');
//genero la consulta
$sel="SELECT id, nombre FROM localidad";
//ejecutamos consulta
$r=$con->query($sel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylodelnuevo.css">
</head>
<body>
<?php

$con = new mysqli ("localhost" , "root" , "" , "escuela");

?>
<form action="guardar.php" method="get" >
        <h1 class="titulo">Registrarse</h1>
        
        <input  type="text" name="Nombre" placeholder="Nombre" value="" />
        <input  type="text" name="Apellido"  placeholder="Apellido" value="" />
        <input  type="text" name="Direccion" placeholder="Dirreccion" value="" />
      Localidad
      <select name="localidad" > 
<option value="0">Selecciona una localidad </option>
<?php_
//recorre la tabla y trae tantos registros como tenga
while($dato = $r->fetch_assoc()){
    echo "<option value='",$dato["id"]."'>".$dato["nombre"]."</option>";
} 
?>
      </select>

        <input  type="number" name="Telefono" placeholder="Telefono" value="" />
        <input  type="text" name="Correo electronico" placeholder="Correo electronico" value="" />
        <input  type="text" name="Redes sociales" placeholder="Redes sociales" value="" />
        <input  type="date" name="Fecha de nacimiento" placeholder="fecha de nacimiento" value="" />
       <br><br>
        <input type="submit" class="btn" value="REGISTRAR">

        
    </form>
    
</body>
</html>
</body>
</html>
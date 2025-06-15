<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="../img/logotipo.png">
</head>
<body >
    <?php
    
$id=$_REQUEST['id'];
//$sel="SELECT * FROM musica WHERE id='$id'";
$sel="SELECT musica.id, musica.titulo, musica.duracion, musica.genero, musica.autor, musica.idioma, musica.fecha_lanzamiento FROM musica WHERE id='$id'";
include 'conexion.php';
$res=$con->query($sel);
$row=$res->fetch_assoc();

?>
<form action="actualizar_musica.php" method="get" class="form">
        <h1 class="titulo">Actualizar</h1>
        <input class="cajas" class="form-control" type="hidden" name="idu" value="<?php echo $id;?>"/>
        <input class="cajas"  type="text" name="titulo" placeholder="tiutlo" value="<?php echo $row['titulo']?>" />
        <input class="cajas"  type="number" name="duracion"  placeholder="duracion" value="<?php echo $row['duracion']?>" />
       <select name="genero">
        <?php_
while($dato = $res->fetch_assoc()){
    if ($row["genero"]==$dato["id"]) {
       echo "<option selected value'" .$dato["id"]."'>" .$dato["nombre"]." </opion>";
    }else {
        echo "<option value=?".$dato["id"]."'>".$dato["nombre"]."</option>";
    }
}
?>
</select>
        <input class="cajas"  type="text" name="autor" placeholder="autor" value="<?php echo $row['autor']?>" />
       <select name="idioma">
        <?php-
while($dato = $res->fetch_assoc()){
    if ($row["idioma"]==$dato["id"]) {
       echo "<option selected value'" .$dato["id"]."'>" .$dato["nombre"]." </opion>";
    }else {
        echo "<option value=?".$dato["id"]."'>".$dato["nombre"]."</option>";
    }
}
?>
</select>
        <input class="cajas"  type="date" name="fecha_lanzamiento" placeholder="fecha de lanzamiento" value="<?php echo $row['fecha_lanzamiento']?>" />
       <br><br>
    
        <input type="submit" class="btn" value="REGISTRAR">

        
        
    </form>


</body>
</html>
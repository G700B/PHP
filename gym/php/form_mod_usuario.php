<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
    <link rel="stylesheet" href="../css/form_regist.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mio.css">
    <link rel="icon" href="../img/logotipo.png">
</head>
<body >
    <?php
$id=$_REQUEST['id'];

$sel="SELECT * FROM pagos WHERE id='$id'";
include 'conexion.php';
$res=$con->query($sel);
$row=$res->fetch_assoc();
?>
<form action="actualizar_series.php" method="get" class="form" class="pe" class="for"  >
        <h1 class="titulo">Actualizar</h1>
        <input class="cajas" class="box" type="hidden" name="idu" value="<?php echo $id;?>">
        <input class="cajas" class="box" type="hidden" name="usuario" value="<?php echo $row['usuario']?>">
        <input class="cajas" class="box"  type="text" name="user" placeholder="user" value="<?php echo $row['user']?>" />
 
       <select name="plan" class="cajas" class="box">
        <?php
while($dato = $res->fetch_assoc()){
    if ($row["plan"]==$dato["id"]) {
       echo "<option selected value'" .$dato["id"]."'>" .$dato["plan"]." </opion>";
    }else {
        echo "<option value=?".$dato["id"]."'>".$dato["plan"]."</option>";
    }
}
?>
</select>
        <input class="cajas" class="box" type="text" name="fecha" placeholder="fecha pago" value="<?php echo $row['fecha_pago']?>" />
      <select name="metodo" class="cajas" class="box">
       
       <?php
while($dato = $res->fetch_assoc()){
    if ($row["metodo"]==$dato["id"]) {
       echo "<option selected value'" .$dato["id"]."'>" .$dato["nombre"]." </opion>";
    }else {
        echo "<option value=?".$dato["id"]."'>".$dato["nombre"]."</option>";
    }
}
?>
</select>
        
    
         <input type="submit" class="btn"  name="val" value="actualizar">

        
        
    </form>


</body>
</html>
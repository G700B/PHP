<?php
session_start();
//$a=isset($_SESSION['dni']);
  //header('location:session.html');
  if (!isset($_SESSION['dni'])){
    header('location:iniciar_sesion.html');
   ?>
 <?php
  exit();
  }
  include ("conexion.php");
  $dni = $_SESSION['dni'];
 

  // Consulta SQL para obtener nombre y apellido del usuario
  $sel = "SELECT id_reg, nombre, apellido FROM registro WHERE dni='$dni'";  
     $res=$con->query($sel);
      $fila=$res->fetch_assoc();
      
   ?>

<?php
include ('conexion.php');

$sel="SELECT id, plan, duracion, precio FROM plan";
$r=$con->query($sel);

$sels="SELECT id, nombre FROM metodo";
$kc=$con->query($sels);


?>





<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Extreme Fit</title>
    <link rel="stylesheet" href="../css/form_regist.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mio.css">
    <link rel="icon" href="../img/logotipo.png">
</head>


    <header>
        <nav>
            <div class="menu-container">
                <ul>
                    <li><a href="pag.php" class="inicio">INICIO</a></li>
                    <li><a href="contacto.html" class="contactanos">CONTACTANOS</a></li>
                    <li><a href="https://instagram.com/cerati" class="siguenos">SIGUENOS</a></li>
                    <li><a href="cerrar_session.php" class="cerrar-sesion">CERRAR SESION</a></li>
               
                </ul>
            </div>
        </nav>
    </header>
    <div class="eze"> 
    <font color="white" size="20"><u><h3 class="titulo">Bienvenido <font color="#FFFFFF"><?php echo $fila['nombre'];echo " "; echo $fila['apellido'];  ?></font><br></u>
    </div>
    <br><center><img src="../img/fondo.png" width="50%" height="120%"></center>
    <br>
    <center><h1>Xtreme Fit es el mejor gimnacio a el mejor precio con los mejores horarios<br>en Gonzalez Catan,
         inscribite y empeza tu cambio fisico campeon!</h1></center>

</font>

       
        







    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabs con Kevin</title>
  <style>
    .kevin-container {
      width: 80%;
      margin: auto;
      font-family: sans-serif;
    }

    .kevin-tabs {
      display: flex;
      background-color: #444;
    }

    .kevin-tab {
      flex: 1;
      padding: 10px;
      text-align: center;
      color: white;
      cursor: pointer;
      border: 1px solid #333;
    }

    .kevin-tab.selected {
      background-color: #222;
      font-weight: bold;
    }

    .kevin-content {
      display: none;
      padding: 20px;
     
      color: #000;
    
      
    }

    .kevin-content.active {
      display: block;
    }
  </style>
</head>
<body style="background-color: black; color: white;">

  <div class="kevin-container">
    <div class="kevin-tabs">
    
      <div class="kevin-tab" data-tab="2">Formulario de Pago</div>
      <div class="kevin-tab" data-tab="3">Plan actual</div>
    </div>

    <div class="kevin-content" data-content="2">
      <p>
        <center><form action="pago.php" method="POST"  class="form" class="pe" class="for"   >
        <font color="white" size="7"><h4>Pago</h4></font>
        <input class="cajas" class="box" type="hidden" name="idu" placeholder="id" value="<?php echo $fila['id_reg']; echo " ";?>" readonly />
     
        <input class="cajas" class="box" type="text" name="usuario" placeholder="Nombre" value="<?php echo $fila['nombre']; echo " "; echo $fila['apellido'];?>" readonly />
      <br><br>
     
      <select name="plan" class="cajas" class="box"> 
<option value="0" disabled selected>Seleccione un plan </option>
<?php


while($dato = $r->fetch_assoc()){
    echo "<option value='".$dato["id"]."'>".$dato["plan"]." ".$dato["duracion"]." $".$dato['precio']."</option>";
} 
?></select>
        <!-- <option>1 dia - $3.000</option>
         <option>1 semana - $10.000</option>
         <option>1 mes - $18.000</option>
         <option>3 meses - $48.000</option>
         <option>6 meses - $75.000</option>
         <option>1 año - $130.000</option>
         <option>Choripan sin chimichurri</option>
         <option>Cirujano</option>-->
      
         <input class="cajas" class="box" type="hidden" name="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>">
            
           <br>
      <select name="metodo" class="cajas" class="box"> 
<option value="0" disabled selected>Seleccione un Metodo de Pago </option>
<?php

while($metodo = $kc->fetch_assoc()){
  echo "<option value='".$metodo["id"]."'>".$metodo["nombre"]."</option>";

} 
?></select>
        <input type="submit" class="btn"  name="val" value="pagar">
  
        
    </form></h3></center>
         
</p>

    </div>
    <div class="kevin-content" data-content="3">
      <p>
        
<p><?php
include 'conexion.php';


$sels="SELECT * FROM plan";
$result=$con->query($sels);

$selc="SELECT * FROM metodo";
$resul=$con->query($selc);

$buscar="SELECT id_reg FROM registro WHERE dni='$dni'";
$resultado=$con->query($buscar);
$fi = $resultado->fetch_assoc();
$id_=$fi['id_reg'];


$sel="SELECT pagos.id, pagos.usuario, pagos.user, pagos.plan, 
    pagos.fecha_pago, pagos.metodo_pago, plan.id, 
    plan.plan, plan.precio, plan.duracion AS plan_nombre, metodo.id, 
    metodo.nombre AS metodo_nombre 
    FROM pagos INNER JOIN plan ON plan.id=pagos.plan 
    INNER JOIN metodo ON metodo.id=pagos.metodo_pago WHERE usuario = '$id_'";
	$ejec=$con->query($sel);



?>
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
         
            <th>Usuario</th>
            <th>Plan</th>
            <th>Fecha de Pago</th>
            <th>Metodo de Pago</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    <?php $cont=0;
while ($fila=$ejec->fetch_assoc()){
    $cont=$cont+1;
    ?>
    <tr>
        <!-- <td><?php echo $cont ?></td> -->
      
        <td><?php echo $fila['user']?></td>
        <td><?php echo $fila['plan']?></td>
         <td><?php echo $fila['fecha_pago']?></td>
        <td><?php echo $fila['metodo_nombre']?></td>
      
        <td><a href='form_mod_usuario.php?id=<?php echo $fila['id']?>'>Actualizar</a></td>
        <td><a href='eliminar_plan.php?id=<?php echo $fila['id']?>'>Borrar</a></td>
    </tr>
<?php 
}
?>
</table></font><font color="white">
<h3><u>Cantidad de registros encontrados: <?php echo $cont ?></u></h3></font>
<br>

</div></p>
 
      </p>
    </div>
  </div><br><br><br><br><br>









<script>
    const tabs = document.querySelectorAll('.kevin-tab');
    const contents = document.querySelectorAll('.kevin-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const tabNumber = tab.getAttribute('data-tab');

        // Quitar selección a todas las tabs
        tabs.forEach(t => t.classList.remove('selected'));
        // Ocultar todo el contenido
        contents.forEach(c => c.classList.remove('active'));

        // Activar la tab y el contenido correspondiente
        tab.classList.add('selected');
        document.querySelector(`.kevin-content[data-content="${tabNumber}"]`).classList.add('active');
      });
    });
  </script>

</body>
</html>





    
</body>
</html>



  

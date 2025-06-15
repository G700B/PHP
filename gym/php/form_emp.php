<?php
 
 session_start();

    $con = new mysqli('localhost', 'root', '', 'gym');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
  
    <link rel="stylesheet" href="../css/styles.css">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mio.css">
    <link rel="stylesheet" href="../css/form_regist.css">
    <title>Pedidos</title>
</head>
<body>
<header>
        <nav>
            <div class="menu-container">
                <ul>
                    <li><a href="../index.html" class="inicio">INICIO</a></li>
                    <li><a href="contacto.html" class="contactanos">CONTACTANOS</a></li>
                    <li><a href="https://instagram.com/cerati" class="siguenos">SIGUENOS</a></li>
                    <li><a href="iniciar_sesion.html" class="iniciar-sesion">INICIAR SESION</a></li>
                </ul>
            </div>
        </nav>
    </header>
<br>



<br><center>
    <form action="form_emp.php" method="post" class="pe">
   
    <h1 class="tt"><center>Registrarse</center></h1>   
       
            
            <input class="box" type="text" name="nombre" placeholder="Nombre" required >
            <br><br>
           
            <input  class="box" type="text" name="apellido" placeholder="Apellido" required>
            <br><br>
            <input class="box" type="number" name="dni" placeholder="DNI" required >
            <br><br>
            <input  class="box" type="text" name="telefono" placeholder="Telefono" required>
            <br><br>
            <input  class="box" type="password" name="password" placeholder="Contraseña" required>
            <br><br>
            <input class="box" type="text" name="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>" placeholder="Fecha de Inscripcion" readonly>
            <br><br>
            <br>
            <input class="btn" type="submit" name="d" value="Enviar"></center>
            <br><br>
          
   
</form></center>

</body>


<?php

    if(isset($_POST['d'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $password = $_REQUEST['password'];
        $fecha = $_POST['fecha'];





        $SQL="SELECT * FROM registro WHERE dni = '$dni' ";
        $res=$con->query($SQL);
        
        if($res->num_rows>0){
            echo "<script>alert ('DNI ya registrado')</script>";
        }else {
                $SQL="INSERT INTO registro (nombre, apellido, dni, telefono, password, f_ins) VALUES ('$nombre','$apellido','$dni','$telefono','$password', '$fecha')";
            $con->query( $SQL );

            echo "<script>alert ('Registrado correctamente')</script>";
            header('iniciar_sesion.html');
        }
          
    }

?>
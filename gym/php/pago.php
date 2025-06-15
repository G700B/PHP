<?php
    include ('conexion.php');



    if(isset($_POST['val'])){

    $usuario = $_REQUEST['idu'];
    $usu = $_REQUEST['usuario'];
    $plan = $_REQUEST['plan'];
    $fecha = $_REQUEST['fecha'];
    $metodo = $_REQUEST['metodo'];
    



    $SQL="SELECT * FROM pagos WHERE usuario = '$usuario' ";
    $res=$con->query($SQL);
    
    if($res->num_rows>0){
        echo "<script>alert ('Ya tiene un plan')</script>";
      
     
    }else {
           
        $SQLs ="INSERT INTO pagos (usuario, user, plan, fecha_pago, metodo_pago) VALUES 
        ('$usuario', '$usu', '$plan', '$fecha', '$metodo')";
        $con->query($SQLs);
    
        echo "<script>alert ('Registrado correctamente')</script>";
 
    }  
} 
<?php
session_start();
include "conexion.php";
$dni=$_REQUEST['dni'];
$password=$_REQUEST['contrasena'];//255 caracteres

$SQL="SELECT * FROM registro WHERE dni ='$dni' ";
$res=$con->query($SQL);

    if ($res->num_rows > 0) {
        $datos=$res->fetch_assoc();//todos los datos
        if( password_verify( $password , $datos['password'] ) ){
            $_SESSION['dni'] = $datos; 
        }else{
            header('location:iniciar_sesion.html');}
    }

if ($password=$datos['password'] &&  $_SESSION['dni']=$datos['dni']) {
    //$_SESSION['dni']=$datos['dni'];
    header('location:pag.php');
}else{
    header('location:iniciar_sesion.html');
}
    /*
    if( password_verify( $password , $datos['password'] ) ){
        $_SESSION['dni'] = $datos; 
    }else{
        header('location:session.html');
    }*/
?>


<?php
    include "Conexion.php";
    $obj= new conectar();

    $nombres    =$_POST['nombres'];
    $apellidos  =$_POST['apellidos'];
    $cedula     =$_POST['cedula'];
    $telefono   =$_POST['telefono'];
    $email      =$_POST['email'];
    $password   =$_POST['password'];
    
    $fe_us_in = date("Y-m-d H:i:s");

    echo $nombres." ".$apellidos." ".$cedula." ".$telefono." ".$email." ".$password." ".$fe_us_in;

    $rs=$obj->Insert("usuarios", 
    "cod_usuario, nombres, apellidos, cedula, telefono, email, password, Estado, fec_us_in, cod_us_in",
    "'admin','".$nombres."','".$apellidos."','".$cedula."','".$telefono."','".$email."','".$password."','true','".$fe_us_in."', 'USU1'");

    var_dump($rs);
    
    
    if($rs){
        header('Location: ../index.php');
        echo' entre';
    }   else{
        echo ' no entre';
    }          
   

?>
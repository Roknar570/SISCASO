<?php
    include "Conexion.php";
    $obj= new conectar();

    $nombres    =$_POST['nombres'];
    $apellidos  =$_POST['apellidos'];
    $cedula     =$_POST['cedula'];
    $telefono   =$_POST['telefono'];
    $email      =$_POST['email'];
    $password   =$_POST['password'];


    echo $nombres." ".$apellidos." ".$cedula." ".$telefono." ".$email." ".$password;

    $obj->Update("usuarios",
                 "cod_usuario='admin', nombres='".$nombres."', apellidos='".$apellidos.
                 "', cedula='".$cedula."', telefono='".$telefono."', email='".$email.
                 "', password='".$password."', Estado='true'",
                 "cod_usuario='admin1'");

    var_dump($obj);
    if($obj){
        echo 'entre';
        //header('Location: ../index.php');

    }   else{
        echo 'no pude';
    }          
   

?>
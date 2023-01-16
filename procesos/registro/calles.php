<?php
    include "../Clases/Conexion.php";
    $obj= new conectar();
    /*variables POST*/ 
    $nombres    =$_POST['nombres'];
    $apellidos  =$_POST['apellidos'];
    /*variables*/ 
    $fe_us_in = date("Y-m-d H:i:s");
    /*INSERTAR*/ 
    $rs=$obj->Insert("usuarios", 
    "cod_usuario, nombres, apellidos, cedula, telefono, email, password, Activo, fec_us_in, cod_us_in",
    "'admin','".$nombres."','".$apellidos."','".$cedula."','".$telefono."','".$email."','".$password."','1','".$fe_us_in."', 'USU1'");
    /*VALIDAR GUARDADO*/
    /*if($rs){
        
    }*/
?>
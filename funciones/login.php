<?php
    include "../Clases/Conexion.php";
    $obj= new conectar();

    $usur   = $_POST['usuario'];
    $pswd   = $_POST['password'];

    echo $usur." ".$pswd;

    if( $obj->existe("usuario","cod_usuario, password","cod_usuario='".$usur."'AND password='".$pswd."'")){
        

    }else{
        header('Location: ../index.php');
        die ();
    }

?>
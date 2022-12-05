<?php

    include "../Clases/Conexion.php";
    $obj= new conectar();

    $usur   = $_POST['usuario'];
    $pswd   = $_POST['password'];


    echo $rs = $obj->existe("usuarios","cod_usuario","cod_usuario='".$usur."' AND password='".$pswd."'");


?>
<?php
    include "../Clases/Conexion.php";
    $obj= new conectar();

    $usur   = $_POST['usuario'];
    $pswd   = $_POST['password'];

    echo $usur." ".$pswd;


    $rs = $obj->existe("usuarios","cod_usuario","cod_usuario='".$usur."' AND password='".$pswd."'");

    var_dump($rs);
    if( $rs  ){
        
        header('Location: ../vistas/inicio.html');
        die ();

    }else{
        echo "pa fuera mi loco";
        echo '<script language="javascript">alert("Pa fuera mi loco");</script>';
        sleep(20);
        header('Location: ../index.php');
        die ();
    }

?>
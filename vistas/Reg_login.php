<?php 
	include "../Clases/Conexion.php";
	$obj= new conectar();
    if($obj->existe("usuarios","cod_usuario","cod_usuario='admin'") ) {
        header('Location: ../index.php');
        die ();
    }?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_Reg_log.css">
</head>
<body>
    <div class="fondo">
        <div class="formulario" >
            <h1>Registrarse</h1>
            <form method="post"  action="../procesos/Reg_login.php">
                <div class="usuario">
                    <input name="nombres" type="text" required>
                    <label>Nombre</label>
                </div>
                <div class="usuario">
                    <input name="apellidos" type="text" required >
                    <label>Apellido</label>
                </div>
                <div class="usuario">
                    <input name="cedula" type="text" required>
                    <label>Cedula</label>
                </div>
                <div class="usuario">
                    <input name="telefono" type="text" required>
                    <label>telefono</label>
                </div>
                <div class="usuario">
                    <input name="email" type="text" required>
                    <label>email</label>
                </div>
                <div class="usuario">
                    <input name="password" type="password" required>
                    <label>password</label>
                </div>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
</body>
</html>
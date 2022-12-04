<?php 
	include "Clases/Conexion.php";
	$obj= new conectar();
    ($obj->existe("usuarios","cod_usuario","cod_usuario='admin'") ) ? $validar = 1 : $validar = 0;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar</title>
        <link rel="stylesheet"  href="css/style.css" />
    </head>
    <body>
        <div class="fondo">
            <div class="formulario">
                
                <h1>Inicio de sesion</h1>
                <form method="post">
                    <div class="usuario">
                        <input type="text" required>
                        <label>Nombre de Usuario</label>
                    </div>  
                    <div class="usuario">
                        <input type="password" required>
                        <label>Contraseña</label>   
                    </div>
                    <div class="recordar">¿olvido su contraseña?</div>
                    <input type="submit" value="iniciar">
                    <?php if($validar == 0) { ?>
                        <div class="registrarse">
                            <a href="vistas/Reg_login.html">registrarse</a>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>
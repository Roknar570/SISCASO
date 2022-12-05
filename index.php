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
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/funciones.js"></script>
    </head>
    <body>
        <div class="fondo">
            <div class="formulario">
                <h1>Inicio de sesion</h1>
                <form id="frmInicio">
                    <div class="usuario">
                        <input name="usuario" type="text" required>
                        <label>Nombre de Usuario</label>
                    </div>  
                    <div class="usuario">
                        <input name="password" type="password" required>
                        <label>Contraseña</label>   
                    </div>
                    <div class="recordar">¿olvido su contraseña?</div>
                    <input type="submit" value="Iniciar" id="entrarSistema">
                    <?php if($validar == 0) { ?>
                        <div class="registrarse">
                            <a href="vistas/Reg_login.php">registrarse</a>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
           vacios=validarFormVacio('frmInicio');
            if(vacios > 0){    
                alert("Debes llenar todos los campos!!");
                return false;
            }
            datos=$('#frmInicio').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url: "procesos/login.php",
                success:function(r){
                    if(r==1){
                        window.location="vistas/inicio.html";
                    }else{
                        alert("No se pudo acceder :(");
                    }
                }
            });
	    });
	});
</script>
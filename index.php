
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width =device-width, initial-scale=1.0">
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
                    <div class="inputContainer ">
                        <input name="usuario" type="text" required>
                        <label>Nombre de Usuario</label>
                    </div>  
                    <div class="inputContainer">
                        <input name="password" type="password" required>
                        <label>Contraseña</label>   
                    </div>
                    <div class="recordar">¿olvido su contraseña?</div>
                    <button class="submitBtn" id="entrarSistema">iniciar</button>
                </form>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
            datos=$('#frmInicio').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url: "procesos/Login/Login.php",
                success:function(r){
                    if(r){
                        window.location="vistas/inicio.php";
                    }else{
                        alert(r);
                        alert("No se pudo acceder :(");
                    }
                }
            });
	    });
	});
</script>
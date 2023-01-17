<?php 
session_start();
if(isset($_SESSION['usu'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="../../css/Style_Primarias.css" />
    <link rel="stylesheet"  href="../../css/Style_inicio.css" />
</head>
<header>
    <nav>
        <ul>
		<li> 
           <div class = "dropdown" >
                <a  href="#">Registrar tablas primarias</a> 
                <div class="dropdown-content">
                    <a href="T_Enfermedad.php">Registro de Tipos de Enfermedad</a>
                    <a href="T_Discapacidad.php">Registro de Tipos de discapacidad</a>
                    <a href="Nivel_Academico.php">Registro de nivel Academico</a>
                </div>
           </div>
        </li>  
        <li><a href="#">Reportes</a></li>
        <li><a href="../inicio.php">inicio</a></li>
		<li><a href="../../procesos/salir.php">Salir</a></li>
	 </ul>
    </nav>
</header>
<body>
    <div class="container">
        <div class="registro">
            <h1 class="title" >REGISTRO DE CALLES</h1>
            <form class="calles" enctype="multipart/form-data">
                <div class="inputContainer">
                    <input type="text" id="cod_calle" name="cod_calle" placeholder="a">    
                    <label>Codigo De Calle</label>
                </div>
                <div class="inputContainer">
                    <input type="text" id="descripcion" name="descripcion"  placeholder="a">
                    <label>Descripcion</label>
                </div>
                <button class="submitBtn" id="Agregar">Agregar</button>
            </form>
            <div id="tablaArticulosLoad"></div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#Agregar').click(function(){
            datos=$('#calles').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url: "../../procesos/registro/calles.php",
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

<?php    }
    else{
         header("location:../index.php");
    }
?>
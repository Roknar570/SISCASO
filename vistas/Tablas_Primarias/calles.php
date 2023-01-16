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
		<li><a href="#">Salir</a></li>
	 </ul>
    </nav>
</header>
<body>
    <div class="container">
        <div class="registro">
            <h1 class="title" >REGISTRO DE CALLES</h1>
            <form class="calles" enctype="multipart/form-data">
                <div class="inputContainer">
                    <input type="text" id="nombre" name="nombre" placeholder="a">    
                    <label>Nombre</label>
                </div>
                <div class="inputContainer">
                    <input type="text" id="descripcion" name="descripcion"  placeholder="a">
                    <label>Descripcion</label>
                </div>
                <button class="submitBtn">Agregar</button>
            </form>
            <div id="tablaArticulosLoad"></div>
        </div>
    </div>
</body>
</html>
<?php    }
    else{
         header("location:../index.php");
    }
?>
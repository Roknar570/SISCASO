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
                    <a href="calles.php">Registro de calles</a>
                    <a href="T_Enfermedad.php">Registro de Tipos de Enfermedad</a>
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
</body>
</html>
<?php    }
    else{
         header("location:../index.php");
    }
?>
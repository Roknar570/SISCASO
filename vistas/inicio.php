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
    <link rel="stylesheet"  href="../css/Style_inicio.css" />
</head>
<header>
    <nav>
        <ul>
		<li> 
           <div class = "dropdown" >
                <a  href="#">Registrar tablas primarias</a> 
                <div class="dropdown-content">
                    <a href="Tablas_Primarias/calles.php">Registro de calles</a>
                    <a href="Tablas_Primarias/Enfermedad.php">Registro de Tipos de Enfermedad</a>
                    <a href="Tablas_Primarias/Discapacidad.php">Registro de Tipos de discapacidad</a>
                    <a href="Tablas_Primarias/Nivel_Academico.php">Registro de nivel Academico</a>
                </div>
           </div>
        </li>
        <li>
            <div class = "dropdown" >
                <a href="#">Familias</a>
                <div class="dropdown-content">
                    <a href="Familias/Integ_Familia.php">Registro de Integrantes de Familia</a>
                    <a href="Familias/Jefes_Familia.php">Registro de Jefe De Familia</a>
                </div>
            </div>
        </li>        
        <li><a href="#">Reportes</a></li>
		<li><a href="#">Usuarios</a></l>
		<li><a href="#">Procesos</a></li>
		<li><a href="../procesos/salir.php">Salir</a></li>
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
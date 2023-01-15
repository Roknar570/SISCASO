<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <nav>
        <ul>
		<li> 
            <div class = "dropdown" >
                <a href="#">Familias</a>
                <div class="dropdown-content">
                    <a href="Familias/Jefes_Familia.php">Registro de Jefe De Familia</a>
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
        <h1>Articulos</h1>
        <form id="frmArticulos" enctype="multipart/form-data">
            <label>Categoria</label>
            <select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
                <option value="A">Selecciona Categoria</option>
                <?php while($ver=mysqli_fetch_row($result)): ?>
                    <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
                <?php endwhile; ?>
            </select>
            <label>Nombre</label>
            <input type="text" class="form-control input-sm" id="nombre" name="nombre">
            <label>Descripcion</label>
            <input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
            <label>Cantidad</label>
            <input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
            <label>Precio</label>
            <input type="text" class="form-control input-sm" id="precio" name="precio">
            <label>Imagen</label>
            <input type="file" id="imagen" name="imagen">
            <p></p>
            <span id="btnAgregaArticulo" class="btn btn-primary">Agregar</span>
        </form>
        <div id="tablaArticulosLoad"></div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Metadatos, enlaces a hojas de estilos, etc. -->
</head>

<?php
include "index.php";
include "test.php";
include "controlador/user_register.php" ;
$id= $_GET["id"];
$sql= $conexion->query("select * from usuarios where id=$id");
?>

<body>
    <!-- Contenido de la página -->
    <header>
        <!-- Encabezado de la página -->
        <h1>Editar usuario</h1>
    </header>
    <form class="col-4 p-3" method="POST">
        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
        <?php 
            while ($datos=$sql->fetch_object()) { ?>
            <div class="mb-3">
                <label class="form-label" >Nombre </label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">email</label>
                <input type="text" class="form-control" name="email"value="<?= $datos->email ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">telefono</label>
                <input type="telefono" class="form-control" name="telefono" value="<?= $datos->telefono ?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac ?>">
            </div>
        <?php 
        }
        ?>
        <button type="submit" class="btn btn-primary" name="btnguardar" value="ok">Guardar</button>
    </form>  


</body>
</html>


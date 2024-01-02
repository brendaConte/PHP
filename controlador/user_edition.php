<?php
include "./editar_usuario.php" ;

if (!empty($_POST["btnguardar"])) {
    if(!empty($_POST["nombre"] and !empty($_POST["email"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha_nac"]))) {
        $id=$_POST["id"];   
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $fecha_nac=$_POST["fecha_nac"];
        $sql=$conexion->query("update user set nombre='$nombre' , email='$email' , telefono='$telefono' , fecha='$fecha' where id="$id" ")
if ($sql==1) {header("location: test.php")}
    else{ echo "<div class="alert alert-warning">Error al modificar usuario</div>";  }
    } else {
   echo "<div class="alert alert-warning">Campos vacios</div>"; 
    }
}
?>
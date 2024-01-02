<?php 
      include "index.php";

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["email"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha_nac"]))
        $nombre= $_POST["nombre"];  
        $email= $_POST["email"];
        $telefono= $_POST["telefono"];
        $fecha_nac= $_POST["fecha_nac"];
        
        $insertar_usuarios = $conexion->query("INSERT INTO usuarios(nombre,email,telefono,fecha_nac) VALUES('$nombre', '$email', '$telefono', '$fecha_nac')");
       
if ($insertar_usuarios ==1) {
    echo '<div class="alert alert-succes"> Usuario registrado correctamente </div>' ;
    }else {
    echo '<div class="alert alert-danger"> Usuario no registrado  </div>' ;
    }  
    }else{
    echo "Alguno de los campos esta vacio" ;
    };


?>
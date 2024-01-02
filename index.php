<?php
$servername = "localhost"; // Cambia esto al nombre de tu servidor si es diferente
$username = "root"; // Reemplaza con tu nombre de usuario de la base de datos
$password = ""; // Reemplaza con tu contraseña
$dbname = "prueba1"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    
 
die("Error de conexión: " . $conexion->connect_error);
} 

else {

}

?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> CRUD php mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>

    </style>
   
</head>

<body>

    <div class="container-fluid row">
       
    <form class="col-4 p-3" method="POST">
        <h3>Formulario</h3>
      <?php 
        include "index.php";
        include "controlador/user_register.php" ;
       ?> 
  <div class="mb-3">
    <label class="form-label" >Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label class="form-label">telefono</label>
    <input type="telefono" class="form-control" name="telefono" >
  </div>
  <div class="mb-3">
    <label  class="form-label">fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha_nac">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Guardar</button>

        </form>
   <div class="col-8 p-4">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $usuarios = $conexion->query(" select * from usuarios") ;
    while ($datos = $usuarios->fetch_object()) {?>
        <tr>
        <td><?php echo $datos->id; ?></td>
        <td><?php echo $datos->nombre; ?></td>
        <td><?php echo $datos->email; ?></td>
        <td><?php echo $datos->telefono; ?></td>
        <td><?php echo $datos->fecha_nac; ?></td>
        <td>
          <a href="editar_usuario.php?id=<?php echo($datos->id)?>" class="btn btn-small btn-warning">editar</a>
          <a href="" class="btn btn-small btn-danger">borrar</a>
        </td>
      </tr>
    <?php }
    ?>
  
  </tbody>
</table>

   </div>     

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

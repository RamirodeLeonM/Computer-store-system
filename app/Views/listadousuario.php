<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/main.css'); ?>">
    <title>Computadoras</title>
</head>
<body>

<header>
<img src="../style/img/logo22.png" alt="Laptop" style="width: 250px; height: 200px;">
</header>    

<nav>
  <a href="<?=base_url("/public/principal") ?>">Inicio</a>
  <a href="<?=base_url("/public/formulariocomputadora") ?>">Ingresar computadoras</a>
  <a href="<?=base_url("/public/listadocomputadoras") ?>">Computadoras</a>
  <a href="<?=base_url("/public/listadousuarios") ?>">Usuarios</a>
  <a href="<?=base_url("/public/salir") ?>">Cerrar sesion</a>
</nav>
<main>  
<table class="table table-striped" >
        <tr>
            <th>ID usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Borrar</th>
            <th>Editar</th>
        </tr>
        <?php foreach ($usuarios as $usuarios): ?>
            <tr>
                <td><?=$usuarios["idusuario"]?></td>
                <td><?=$usuarios["nombre"]?></td>
                <td><?=$usuarios["apellido"]?></td>
                <td><?=$usuarios["usuario"]?></td>
                <td><?=$usuarios["contra"]?></td>
                <td><a href=" <?=base_url("/public/borrarusuario/{$usuarios["idusuario"]}")  ?> ">X</td>
                <td><a href="<?=base_url("/public/editarusuario/{$usuarios["idusuario"]}")  ?> ">Modificar</td>
            </tr>
        
        <?php endforeach ?>
    </table>



</main>

<footer>
  <h2>¡Lo mejor de lo mejor!</h2>
  
</footer>

</body>
</html>
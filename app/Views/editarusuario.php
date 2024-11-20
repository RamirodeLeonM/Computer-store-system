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



    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/css/formulario.css'); ?>">
    <title>Computadoras</title>
</head>
<body>

<header>
<img src="<?=base_url("/style/img/logo22.PNG")?>" alt="Laptop" style="width: 250px; height: 200px;">
</header>    

<nav>
  <a href="<?=base_url("/public/principal") ?>">Inicio</a>
  <a href="<?=base_url("/public/formulariocomputadora") ?>">Ingresar computadoras</a>
  <a href="<?=base_url("/public/listadocomputadoras") ?>">Computadoras</a>
  <a href="<?=base_url("/public/listadousuarios") ?>">Usuarios</a>
  <a href="<?=base_url("/public/salir") ?>">Cerrar sesion</a>
</nav>
<main>
<?php foreach ($usuarios as $usuarios): ?>
    <form name="usuario" method="post" action="<?=base_url("/public/actualizarusuario/{$usuarios["idusuario"]}") ?>">
    <aside>
        <legend>Editar usuario</legend>
    
        <label>Nombres:</label>
            <input class="form-control" type ="text" id="nombre" name ="nombre" maxlength="100" placeholder="Ingrese nombres" value="<?= $usuarios["nombre"] ?>" ><br>

        <label>Apellidos:</label>
            <input class="form-control" type="text" id="apellido" name = "apellido" maxlength="100" placeholder="Ingrese apellidos" value="<?= $usuarios["apellido"] ?>"><br>
            </aside>
            <section>
                <br>
        <label>Usuario:</label>
            <input class="form-control" type="text" id="usuario" name = "usuario" maxlength="100" placeholder="Ingrese nombre de usuario" value="<?= $usuarios["usuario"] ?>"><br>
        
        <label>Contraseña:</label>
            <input class="form-control" type="text" id="contra" name = "contra" maxlength="100" placeholder="Ingrese contraseña" value="<?= $usuarios["contra"] ?>"><br>

            <button class="btn btn-primary" type="submit">Guardar</button>
</section>
           
    </form>
    <?php endforeach ?>
    </main>
</body>
<footer>
  <h2>¡Lo mejor de lo mejor!</h2>
  
</footer>
</html>
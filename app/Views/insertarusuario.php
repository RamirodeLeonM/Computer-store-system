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

    <title>Formulario Usuario</title>
</head>
<body>
<main>
    <aside>
    <img src="../style/img/logo22.png" alt="Laptop" style="width: 250px; height: 200px;">
    </aside>
    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          
          <form style="width: 23rem;"  name="usuario" method="post" action="<?=base_url("/public/insertarusuario") ?>">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crear usuario</h3>

            <div class="form-outline mb-4">
              <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" />
              <label class="form-label" for="nombre">Nombre</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="apellido" name="apellido" class="form-control form-control-lg" />
              <label class="form-label" for="apellido">Apellido</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" />
              <label class="form-label" for="usuario">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="contra" name="contra" class="form-control form-control-lg" />
              <label class="form-label" for="contra">Contraseña</label>
            </div>

            
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Registrar</button>
            </div>

            <p>Regresar a <a href="<?=base_url("/public/index") ?>" class="link-info">Inicio</a></p>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>
</main>
</body>
</html>
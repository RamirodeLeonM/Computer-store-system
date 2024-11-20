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
   
    
    
    <title>Pagina principal</title>
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
  <aside>
    <h2>Nuevo ingreso</h2>
    <img src="../style/img/lap1.jpg" alt="Laptop" style="width: 200px; height: 200px;">
    <h3>Laptop Asus X712J i5-1035G1 12GB RAM + 1TB HDD 17.3″ Plata Win11 Home</h3>
    <img src="../style/img/lap2.jpg" alt="Laptop" style="width: 200px; height: 200px;">
    <h3>Laptop HP Pavilion x360 i3-1125G4 8GB RAM 256GB SSD 14″ Win 10 Home</h3>
  </aside>

  <section>
  <h2>Las mas vendidas</h2>
  <img src="../style/img/lap3.png" alt="Laptop" style="width: 300px; height: 200px;">
  <h3>MSI GE73 Raider RGB 8RE i7-1100h  16 RAM 1 TB SSD RTX 2060 6Gb</h3>
  <img src="../style/img/lap4.png" alt="Laptop" style="width: 330px; height: 200px;">
  <h3>Laptop Huawei Matebook 14 2021 Core i5-1135G7 8GB RAM + 512GB SSD Win10 Home</h3>
  </section>
</main>



<footer>
  <h2>¡Lo mejor de lo mejor!</h2>
  
</footer>

</body>
</html>
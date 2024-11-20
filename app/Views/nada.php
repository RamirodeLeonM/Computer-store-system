

    <form name="login" method="post" action="<?=base_url("/public/login") ?>">
        <legend>Login</legend>
        
        <label>Usuario:</label>
            <input type="text" id="usuario" name = "usuario" maxlength="100" placeholder="Ingrese nombre de usuario"><br>
        
        <label>Contraseña:</label>
            <input type="text" id="contra" name = "contra" maxlength="100" placeholder="Ingrese contraseña"><br>

            <button type="submit">Guardar</button>

    </form>



    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Procesador</th>
            <th>Almacenamiento</th>
            <th>Ram</th>
            <th>Sistema operativo</th>
            <th>Pantalla</th>
            <th>Tarjeta de video</th>
            <th>Descripcion</th>
            <th>Borrar</th>
            <th>Editar</th>
        </tr>
        
        <?php foreach ($computadoras as $computadoras): ?>
            <tr>
                <td><?=$computadoras["idcomputadoras"]?></td>
                <td><?=$computadoras["marca"]?></td>
                <td><?=$computadoras["modelo"]?></td>
                <td><?=$computadoras["procesador"]?></td>
                <td><?=$computadoras["almacenamiento"]?></td>
                <td><?=$computadoras["ram"]?></td>
                <td><?=$computadoras["so"]?></td>
                <td><?=$computadoras["pantalla"]?></td>
                <td><?=$computadoras["tarjetavideo"]?></td>
                <td><?=$computadoras["descripcion"]?></td>
                
                <td><a href="<?=base_url("/public/borrarcomputadora/{$computadoras["idcomputadoras"]}")  ?> ">X</td>
                <td><a href=" <?=base_url("/public/editarcomputadora/{$computadoras["idcomputadoras"]}")  ?>  ">Modificar</td>
            </tr>
        
        <?php endforeach ?>
    </table>






    <table >
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







    <form name="usuario" method="post" action="<?=base_url("/public/insertarusuario") ?>">
        <legend>Usuario</legend>

        <label>Nombres:</label>
            <input type ="text" id="nombre" name ="nombre" maxlength="100" placeholder="Ingrese nombres"><br>

        <label>Apellidos:</label>
            <input type="text" id="apellido" name = "apellido" maxlength="100" placeholder="Ingrese apellidos"><br>
        
        <label>Usuario:</label>
            <input type="text" id="usuario" name = "usuario" maxlength="100" placeholder="Ingrese nombre de usuario"><br>
        
        <label>Contraseña:</label>
            <input type="text" id="contra" name = "contra" maxlength="100" placeholder="Ingrese contraseña"><br>

            <button type="submit">Guardar</button>

    </form>




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
boton de index
<button class="btn btn-info btn-lg btn-block" type="submit">Entrar</button>
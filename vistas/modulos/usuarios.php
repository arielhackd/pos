<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Usuarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- CAJA POR DEFECTO -->
    <div class="box">
      <!-- HEADER DE LA CAJA -->
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
      </div>
      <!-- CUERPO DE LA TABLL -->
      <div class="box-body">
        <!-- SE CREA LA TABAL DENTRO DEL CUERPO DEL BOX -->
        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
          <!-- ENCABEZADO DE TABLA CON THEAD -->
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th style="width: 180px;">Usuario</th>
              <th style="width: 60px;">Foto</th>
              <th style="width: 150px;">Perfil</th>
              <th style="width: 60px;">Estado</th>
              <th style="width: 120px;">Último Login</th>
              <th style="width: 120px;">Acciones</th>
            </tr>
          </thead>

          <tbody>
          <?php
            $item = null;
            $valor = null;
            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
            /* EN LA PRIMER COLUMNA SE USA LA VARIABLE $KEY PARA LLEVAR UN CONTADOR DE REGISTROS */
            /* SI SE USARA EL ID NO SE MOSTRARIAN EN ORDEN, SINO COMO ID */
            foreach($usuarios as $key => $value){
              echo '
                <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';
                  if($value["foto"]!=""){
                    echo'<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                  }else{
                    echo'<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';
                  }
              echo'<td>'.$value["perfil"].'</td>';
              if($value["estado"] != 0){
                echo'<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
              }else{
                echo'<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
              }

              echo'<td>'.$value["ultimo_login"].'</td>
                  <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
                    <div class="btn-group">
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              ';
            }
          ?>

          </tbody>

        </table>
      </div>
    </div>
    <!-- FINAL DE CAJA -->


  </section>
  <!-- SECCION DE CONTENIDO -->
</div>
<!-- /CONTENT WRAPPER -->




<!-- VENTANAS MODALES / AGREGAR USUARIO -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Usuario</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- INPUT PARA EL USUARIO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA USUARIO-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA PASSWORD-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA PERFIL-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="nuevoPerfil">
                  <option value="">Seleccionar Perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>
              </div>
            </div>

            <!-- NUEVA ENTRADA PARA SUBIR LA FOTO -->
            <div class="form-group">
              <div class="panel">SUBIR FOTO</div>
              <input type="file" class="nuevaFoto" name="nuevaFoto">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
            </div>

          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </div> 
        <?php
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();
        ?>
      </form>
    </div>
  </div>
</div>




<!-- VENTANAS MODALES / EDITAR USUARIO -->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Usuario</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- INPUT PARA EL USUARIO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA USUARIO-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
              </div>
            </div>

            <!-- NUEVA ENTRADA PASSWORD-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
                <input type="hidden" id="passwordActual" name="passwordActual">
              </div>
            </div>

            <!-- NUEVA ENTRADA PERFIL-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarPerfil">
                  <option value="" id="editarPerfil"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>
              </div>
            </div>

            <!-- NUEVA ENTRADA PARA SUBIR LA FOTO -->
            <div class="form-group">
              <div class="panel">SUBIR FOTO</div>
              <input type="file" class="nuevaFoto" name="editarFoto">
              <input type="hidden" name="fotoActual" id="fotoActual">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
            </div>

          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Modificar Usuario</button>
        </div> 
        <?php
          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();
        ?>
        <?php
          $borrarUsuario = new ControladorUsuarios();
          $borrarUsuario -> ctrBorrarUsuario();
        ?>
      </form>
    </div>
  </div>
</div>
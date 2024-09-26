<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Clientes
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Clientes</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- CAJA POR DEFECTO -->
    <div class="box">
      <!-- HEADER DE LA CAJA -->
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Agregar Cliente</button>
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
              <th>Documento ID</th>
              <th>Email</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Fecha Nacimiento</th>
              <th>Total Compras</th>
              <th>Ultima Compra</th>
              <th>Ingreso al Sistema</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>

          <tr>
            <td>1</td>
            <td>Juan Villegas</td>
            <td>81611223</td>
            <td>juan@hotmail.com</td>
            <td>+50233484265</td>
            <td>3C L15 COL SANTA ANITA</td>
            <td>1993-03-24</td>
            <td>35</td>
            <td>2017-12-11 12:05:32</td>
            <td>2017-12-11 12:05:32</td>
            <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Juan Villegas</td>
            <td>81611223</td>
            <td>juan@hotmail.com</td>
            <td>+50233484265</td>
            <td>3C L15 COL SANTA ANITA</td>
            <td>1993-03-24</td>
            <td>35</td>
            <td>2017-12-11 12:05:32</td>
            <td>2017-12-11 12:05:32</td>
            <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Juan Villegas</td>
            <td>81611223</td>
            <td>juan@hotmail.com</td>
            <td>+50233484265</td>
            <td>3C L15 COL SANTA ANITA</td>
            <td>1993-03-24</td>
            <td>35</td>
            <td>2017-12-11 12:05:32</td>
            <td>2017-12-11 12:05:32</td>
            <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Juan Villegas</td>
            <td>81611223</td>
            <td>juan@hotmail.com</td>
            <td>+50233484265</td>
            <td>3C L15 COL SANTA ANITA</td>
            <td>1993-03-24</td>
            <td>35</td>
            <td>2017-12-11 12:05:32</td>
            <td>2017-12-11 12:05:32</td>
            <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
          </tr>

          </tbody>

        </table>
      </div>
    </div>
    <!-- FINAL DE CAJA -->


  </section>
  <!-- SECCION DE CONTENIDO -->
</div>
<!-- /CONTENT WRAPPER -->




<!-- VENTANAS MODALES / AGREGAR CLIENTE -->
<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Cliente</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- INPUT PARA EL CLIENTE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Nombre" required>
              </div>
            </div>

            <!-- INPUT PARA EL DOUMENTO ID -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar Documento" required>
              </div>
            </div>

            <!-- INPUT PARA EL EMAIL -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>
              </div>
            </div>

            <!-- INPUT PARA EL TELEFONO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Telefono" data-inputmask="'mask':'+(999)9999-9999'" data-mask required>
              </div>
            </div>

            <!-- NUEVA ENTRADA USUARIO-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA PASSWORD-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
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
              <input type="file" id="nuevaFoto" name="nuevaFoto">
              <p class="help-block">Peso máximo de la foto 200MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </div> 
      </form>
    </div>
  </div>
</div>






<!-- VENTANAS MODALES / MODIFICAR USUARIO -->
<div id="modalModificarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <!-- ENCABEZADO DEL MODAL -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modificar Usuario</h4>
      </div>
      <!-- CUERPO DEL MODAL -->
      <div class="modal-body">
        <p>Texto de ejemplo para la ventana modal</p>
      </div>
      <!-- FOOTER DEL MODAL -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div> 
    </div>
  </div>
</div>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Categorías
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Categorías</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- CAJA POR DEFECTO -->
    <div class="box">
      <!-- HEADER DE LA CAJA -->
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar Categoría</button>
      </div>
      <!-- CUERPO DE LA TABLL -->
      <div class="box-body">
        <!-- SE CREA LA TABAL DENTRO DEL CUERPO DEL BOX -->
        <table class="table table-bordered table-striped dt-responsive tablas">
          <!-- ENCABEZADO DE TABLA CON THEAD -->
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Categoría</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>1</td>
              <td>EQUIPOS ELECTROMECÁNICOS</td>
              <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>EQUIPOS ELECTROMECÁNICOS</td>
              <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td>EQUIPOS ELECTROMECÁNICOS</td>
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




<!-- VENTANAS MODALES / AGREGAR USUARIO -->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Categoría</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- INPUT PARA EL USUARIO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoría" required>
              </div>
            </div>
          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Categoría</button>
        </div> 
      </form>
    </div>
  </div>
</div>






<!-- VENTANAS MODALES / MODIFICAR USUARIO -->
<div id="modalModificarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <!-- ENCABEZADO DEL MODAL -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modificar Categoria</h4>
      </div>
      <!-- CUERPO DEL MODAL -->
      <div class="modal-body">
        <!-- INPUT PARA EL USUARIO -->
        <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoría" required>
              </div>
            </div>
      </div>
      <!-- FOOTER DEL MODAL -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Modificar Categoría</button>
      </div> 
    </div>
  </div>
</div>
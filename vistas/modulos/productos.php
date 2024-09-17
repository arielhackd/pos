<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Productos
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Productos</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- CAJA POR DEFECTO -->
    <div class="box">
      <!-- HEADER DE LA CAJA -->
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar Producto</button>
      </div>
      <!-- CUERPO DE LA TABLL -->
      <div class="box-body">
        <!-- SE CREA LA TABAL DENTRO DEL CUERPO DEL BOX -->
        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
          <!-- ENCABEZADO DE TABLA CON THEAD -->
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Imagen</th>
              <th>Codigo</th>
              <th>Descripcion</th>
              <th>Categoria</th>
              <th>Stock</th>
              <th>Precio Compra</th>
              <th>Precio Venta</th>
              <th>Agregado</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <!-- <tbody> -->
          
          <?php
            /* $item = null;
            $valor = null;
            $productos = ControladorProductos::ctrMostrarProductos($item, $valor);
            foreach($productos as $key => $value){
              echo'
                <tr>
                  <td>'.($key+1).'</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>'.$value["codigo"].'</td>
                  <td>'.$value["descripcion"].'</td>';
              $item = "id";
              $valor = $value["id_categoria"];
              $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
              echo'
                  <td>'.$categoria["categoria"].'</td>
                  <td>'.$value["stock"].'</td>
                  <td>'.$value["precio_compra"].'</td>
                  <td>'.$value["precio_venta"].'</td>
                  <td>'.$value["fecha"].'</td>
                  <td><!-- INICIA ULTIMA COLUMNA DE ACCIONES -->
                    <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              ';
            } */
            
          ?>

       <!--    </tbody> -->

        </table>
      </div>
    </div>
    <!-- FINAL DE CAJA -->


  </section>
  <!-- SECCION DE CONTENIDO -->
</div>
<!-- /CONTENT WRAPPER -->




<!-- VENTANAS MODALES / AGREGAR PRODUCTO -->
<div id="modalAgregarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Producto</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- NUEVA ENTRADA CATEGORIA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <!-- EN JAVASCRIPT HACEMOS REFERENCIA AL OBJETO A TRAVES DEL ID COMO #nuevaCategoria -->
                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria">
                  <option value="">Seleccionar Categoria</option>
                  <?php
                    $item = null;
                    $valor = null;
                    $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                    foreach($categoria as $key => $value){
                      echo'<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>

            <!-- INPUT PARA EL CODIGO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" value="" readonly required>
              </div>
            </div>

            <!-- NUEVA ENTRADA DESCRIPCION-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar Descripcion" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA STOCK-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
              </div>
            </div>

            <!-- FORM GROUP PARA ENTRADAS DE PRECIOS -->
            <div class="form-group row">
              <div class="col-xs-6">
                <!-- NUEVA ENTRADA PARA EL PRECIO COMPRA -->
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                  <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" placeholder="Precio de Compra" required>
                </div>
              </div>
              
              <div class="col-xs-6">
                <!-- ENTRADA PARA EL PRECIO VENTA -->
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                  <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" placeholder="Precio de Venta" required>
                </div>

                <br>
                <!-- CHECKBOX PARA PORCENTAJES -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-green porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>
                </div>

                <!-- ENTRADA PARA PORCENTAJES -->
                <div class="col-xs-6" style="padding:0;">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>

              </div>
            </div>

            <!-- NUEVA ENTRADA PARA SUBIR LA FOTO -->
            <div class="form-group">
              <div class="panel">SUBIR IMAGEN</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </div>
      </form>
      <?php
        $crearProducto = new ControladorProductos();
        $crearProducto -> ctrCrearProducto();
      ?>
    </div>
  </div>
</div>



<!-- VENTANAS MODALES / EDITAR PRODUCTO -->
<div id="modalEditarProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- CONTENIDO DEL MODAL -->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- ENCABEZADO DEL MODAL -->
        <div class="modal-header" style="background:#3c8dbc; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Producto</h4>
        </div>
        <!-- CUERPO DEL MODAL -->
        <div class="modal-body">
          <div class="box-body">
            <!-- INPUT PARA EL CODIGO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                <input type="text" class="form-control input-lg" name="editarCodigo" value="" required>
              </div>
            </div>

            <!-- INPUTA PARA DESCRIPCION-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                <input type="text" class="form-control input-lg" name="editarDescripcion" value="" required>
              </div>
            </div>

            <!-- NUEVA ENTRADA CATEGORIA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="editarCategoria">
                  <option value=""></option>
                  <option value="Taladros">Taladros</option>
                  <option value="Andamios">Andamios</option>
                  <option value="Equipos para Construccion">Equipos para Construccion</option>
                </select>
              </div>
            </div>

            <!-- NUEVA ENTRADA STOCK-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
              </div>
            </div>

            <!-- FORM GROUP PARA ENTRADAS DE PRECIOS -->
            <div class="form-group row">
              <div class="col-xs-12 col-sm-6">
                <!-- NUEVA ENTRADA PARA EL PRECIO COMPRA -->
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" step="any" placeholder="Precio de Compra" required>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-6">
                <!-- ENTRADA PARA EL PRECIO VENTA -->
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" step="any" placeholder="Precio de Venta" required>
                </div>

                <br>
                <!-- CHECKBOX PARA PORCENTAJES -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-green porcentaje" checked>
                      Utilizar porcentaje
                    </label>
                  </div>
                </div>

                <!-- ENTRADA PARA PORCENTAJES -->
                <div class="col-xs-6" style="padding:0;">
                  <div class="input-group">
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                  </div>
                </div>

              </div>
            </div>

            <!-- NUEVA ENTRADA PARA SUBIR LA FOTO -->
            <div class="form-group">
              <div class="panel">SUBIR IMAGEN</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
            </div>

          </div><!-- FINAL DE BOX BODY -->
        </div>
        <!-- FOOTER DEL MODAL -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </div> 
      </form>
    </div>
  </div>
</div>
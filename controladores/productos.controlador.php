<?php

class ControladorProductos{
    static public function ctrMostrarProductos($item, $valor){
        $tabla = "productos";
        $respuesta = ModeloProductos::MdlMostrarProductos($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrCrearProducto(){
        if(isset($_POST["nuevaDescripcion"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
            preg_match('/^[0-9]+$/', $_POST["nuevoStock"]) &&
            preg_match('/^[0-9]+$/', $_POST["nuevoPrecioCompra"]) &&
            preg_match('/^[0-9]+$/', $_POST["nuevoPrecioVenta"])){
                /* SI TODOS LOS CAMPOS HACEN MATCH SE PROCEDE A LA BASE */
                $tabla = "productos";
                $ruta = "vistas/img/productos/default/anonymous.png";
                $datos = array("id_categoria"=>$_POST["nuevaCategoria"],
                    "codigo"=>$_POST["nuevoCodigo"],
                    "descripcion"=>$_POST["nuevaDescripcion"],
                    "stock"=>$_POST["nuevoStock"],
                    "precio_compra"=>$_POST["nuevoPrecioCompra"],
                    "precio_venta"=>$_POST["nuevoPrecioVenta"],
                    "imagen"=>$ruta);
                $respuesta = ModeloProductos::mdlIngresarProducto($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "El productos ha sido guardado correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="productos";
                            }
                        });
                    </script>';
                }
            }else{
                echo '<script>
                    swal({
                        type: "error",
                        title: "Los campos no pueden ir vacíos o llevar caracteres especiales.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="usuarios";
                        }
                    });
                </script>';
            }
        }
    }
}
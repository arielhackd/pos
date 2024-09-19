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
            preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioCompra"]) &&
            preg_match('/^[0-9.]+$/', $_POST["nuevoPrecioVenta"])){
                /* SI TODOS LOS CAMPOS HACEN MATCH SE PROCEDE A LA BASE */
                $tabla = "productos";
                $ruta = "vistas/img/productos/default/anonymous.png";

                if(isset($_FILES["nuevaImagen"]["tmp_name"]) && !empty($_FILES["nuevaImagen"]["tmp_name"])){
                    list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    /* CREAMOS LA RUTA PARA GUARDAR LA FOTO */
                    $directorio = "vistas/img/productos/".$_POST["nuevoCodigo"];
                    /* MKDIR CREA UNA CARPETA Y 0755 CORRESPONDE AL PERMISO DE LECTURA Y ESCRITURA */
                    mkdir($directorio, 0755);
                    /* DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTIO DE PHP */
                    if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){
                        /* GUARDAMOS EN LA RUTA */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/productos/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
                        $origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagejpeg($destino, $ruta);
                    }
                    if($_FILES["nuevaImagen"]["type"] == "image/png"){
                        /* GUARDAMOS EN LA RUTA */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/productos/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
                        $origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagepng($destino, $ruta);
                    }
                }

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

    static public function ctrEditarProducto(){
        if(isset($_POST["editarDescripcion"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
            preg_match('/^[0-9]+$/', $_POST["editarStock"]) &&
            preg_match('/^[0-9.]+$/', $_POST["editarPrecioCompra"]) &&
            preg_match('/^[0-9.]+$/', $_POST["editarPrecioVenta"])){
                /* SI TODOS LOS CAMPOS HACEN MATCH SE PROCEDE A LA BASE */
                $tabla = "productos";
                $ruta = $_POST["imagenActual"];

                if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){
                    list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    /* CREAMOS LA RUTA PARA GUARDAR LA FOTO */
                    $directorio = "vistas/img/productos/".$_POST["editarCodigo"];
                    /* ANTES DE CREAR LA CARPETA VALIDAMOS SI EXISTE UNA IMAGEN */
                    if(!empty($_POST["imagenActual"]) && $_POST["imagenActual"]!="vistas/img/productos/default/anonymous.png"){
                        /* SI LA IMAGEN YA EXISTE Y NO ES IGUAL A DEFAULT, ENTONCES LA BORRAMOS */
                        unlink($_POST["imagenActual"]);
                    }else{
                        /* MKDIR CREA UNA CARPETA Y 0755 CORRESPONDE AL PERMISO DE LECTURA Y ESCRITURA */
                        mkdir($directorio, 0755);
                    }
                    /* DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTIO DE PHP */
                    if($_FILES["editarImagen"]["type"] == "image/jpeg"){
                        /* GUARDAMOS EN LA RUTA */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/productos/".$_POST["editarCodigo"]."/".$aleatorio.".jpg";
                        $origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagejpeg($destino, $ruta);
                    }
                    if($_FILES["editarImagen"]["type"] == "image/png"){
                        /* GUARDAMOS EN LA RUTA */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/productos/".$_POST["editarCodigo"]."/".$aleatorio.".png";
                        $origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                        imagepng($destino, $ruta);
                    }
                }

                $datos = array("id_categoria"=>$_POST["editarCategoria"],
                    "codigo"=>$_POST["editarCodigo"],
                    "descripcion"=>$_POST["editarDescripcion"],
                    "stock"=>$_POST["editarStock"],
                    "precio_compra"=>$_POST["editarPrecioCompra"],
                    "precio_venta"=>$_POST["editarPrecioVenta"],
                    "imagen"=>$ruta);
                $respuesta = ModeloProductos::mdlEditarProducto($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "El productos ha sido editado correctamente.",
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

    static public function ctrBorrarProducto(){
        if(isset($_GET["idProducto"])){
            $tabla="productos";
            $datos = $_GET["idProducto"];
            if($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/productos/default/anonymous.png"){
                unlink($_GET["imagen"]);
                rmdir("vistas/img/productos/".$_GET["codigo"]);
            }
            $respuesta = ModeloProductos::mdlBorrarProducto($tabla, $datos);
            if($respuesta=="ok"){
                echo '<script>
                        swal({
                            type: "success",
                            title: "El productos ha sido borrado correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="productos";
                            }
                        });
                    </script>';
            }else{
                echo '<script>
                        swal({
                            type: "success",
                            title: "Hubo un error al borrar el producto.",
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
        }
    }
}
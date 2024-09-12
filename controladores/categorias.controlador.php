<?php

class ControladorCategorias{

    static public function ctrCrearCategoria(){
        if(isset($_POST["nuevaCategoria"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){
                /* SI SE CUMPLEN LOS PREGMATCH */
                $tabla = "categorias";
                $datos = $_POST["nuevaCategoria"];
                $respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);
                if($respuesta=="ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "La categoria ha sido guardado correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="categorias";
                            }
                        });
                    </script>';
                }else{
                    /* SI NO CUMPLE LOS PARAMETROS */
                    echo '<script>
                        swal({
                            type: "error",
                            title: "¡Hubo un error al agregar el registro!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="categorias";
                            }
                        });
                    </script>';
                }
            }else{
                /* SI NO CUMPLE LOS PARAMETROS */
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡La categoría no puede llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="categorias";
                        }
                    });
                </script>';
            }
        }
    }

    static public function ctrMostrarCategorias($item, $valor){
        $tabla = "categorias";
        $respuesta = ModeloCategorias::MdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrEditarCategoria(){
        if(isset($_POST["editarCategoria"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){
                /* SI SE CUMPLEN LOS PARAMETROS DEL PREGMATCH */
                $tabla = "categorias";
                $datos = array("id"=>$_POST["idCategoria"],
                    "categoria"=>$_POST["editarCategoria"]);
                $respuesta = ModeloCategorias::mdlEditarCategoria($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "La categoria ha sido editada correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="categorias";
                            }
                        });
                    </script>';
                }else{
                    echo '<script>
                        swal({
                            type: "error",
                            title: "Hubo un error al modificar el registro.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="categorias";
                            }
                        });
                    </script>';
                }

            }else{
                /* SI NO SE CUMPLEN LOS PARAMETROS DEL PREGMATCH */
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡La categoría no puede llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="categorias";
                        }
                    });
                </script>';
            }
        }
    }

    /* BORRAR USUARIO */
    static public function ctrBorrarCategoria(){
        if(isset($_GET["idCategoria"])){
            $tabla = "categorias";
            $datos = $_GET["idCategoria"];
            $respuesta = ModeloCategorias::mdlBorrarCategoria($tabla, $datos);
            if($respuesta == "ok"){
                echo '<script>
                    swal({
                        type: "success",
                        title: "La categoría se ha borrado correctamente.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="categorias";
                        }
                    });
                </script>';
            }else{
                echo '<script>
                    swal({
                        type: "error",
                        title: "Hubo un error al eliminar el registro.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="categorias";
                        }
                    });
                </script>';
            }
        }
    }
}
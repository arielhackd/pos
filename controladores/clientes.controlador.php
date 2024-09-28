<?php

class ControladorClientes{
    /* CREAR CLIENTES */
    static public function ctrCrearCliente(){
        if(isset($_POST["nuevoCliente"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoDocumentoId"]) &&
            preg_match('/^[+()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
            preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"]) &&
            preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"])){
                /* SI CUMPLE CON EL MATCH */
                $tabla = "clientes";
                $datos = array("nombre"=>$_POST["nuevoCliente"],
                        "documento"=>$_POST["nuevoDocumentoId"],
                        "email"=>$_POST["nuevoEmail"],
                        "telefono"=>$_POST["nuevoTelefono"],
                        "direccion"=>$_POST["nuevaDireccion"],
                        "fecha_nacimiento"=>$_POST["nuevaFechaNacimiento"]);
                $respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "El cliente ha sido guardado correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location="clientes";
                            }
                        });
                    </script>';
                }
            }else{
                echo '<script>
                    swal({
                        type: "error",
                        title: "Existen carácteres no validos en el formulario.",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location="clientes";
                        }
                    });
                </script>';
            }
        }else{
            /* NO HACE NADA YA QUE EL CODIGO SE EJECUTA SOLO SI VIENE LA VARIABLE */
        }
    }
}
<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";
require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class TablaProductos{
    /* MOSTRAR TABLA DE PRODUCTOS */
    public function mostrarTablaProductos(){
        $item = null;
        $valor = null;
        $productos = ControladorProductos::ctrMostrarProductos($item, $valor);
        $botones = "<div class='btn-group'><button class='btn btn-warning'><i class='fa fa-pencil'></i></button><button class='btn btn-danger'><i class='fa fa-times'></i></button></div>";

        $datosJson = '{
            "data": [';
        for($i=0;$i<=count($productos);$i++){
            $imagen = "<img src='".$productos[$i]["imagen"]."' class='img-thumbnail' width='40px'>";
            $item = "id";
            $valor = $productos[$i]["id_categoria"];
            $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
            $datosJson.='[
                "'.($i+1).'",
                "'.$imagen.'",
                "'.$productos[$i]["codigo"].'",
                "'.$productos[$i]["descripcion"].'",
                "'.$categoria["categoria"].'",
                "'.$productos[$i]["stock"].'",
                "'.$productos[$i]["precio_compra"].'",
                "'.$productos[$i]["precio_venta"].'",
                "'.$productos[$i]["fecha"].'",
                "'.$botones.'"
            ],';
        }
        /* ESTE SUBSTR BORRA EL ULTIMO CARACTER DEL STRING, QUITANDO ASÍ LA COMA QUE SOBRA SIN UTILIZAR IF O CONDICIONALES */
        $datosJson = substr($datosJson, 0, -1);
        $datosJson.=']
        }';
        echo $datosJson;
    }
}

/* ACTIVANDO LA TABLA DE PRODUCTOS */
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();
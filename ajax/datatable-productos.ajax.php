<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";
require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class TablaProductos{
    /* MOSTRAR TABLA DE PRODUCTOS */
    public function mostrarTablaProductos(){
        /* SE REALIZA UNA CONSULTA PARA TRAER TODOS LOS PRODUCTOS */
        $item = null;
        $valor = null;
        $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

        /* SE INICIA EL SCRIPT DE TEXTO JSON PARA QUE PUEDA SER MOSTRADO EN LA TABLA */
        $datosJson = '{
            "data": [';
        /* CON UN CICLO FOR SE RECORRE LA CONSULTA DE PRODUCTOS Y SE AGREGAN UNO POR UNO EN LA ESTRUCTURA DE TEXTO JSON */
        for($i=0;$i<count($productos);$i++){
            /* SE AGREGA LA IMAGEN DEL PRODUCTO */
            $imagen = "<img src='".$productos[$i]["imagen"]."' class='img-thumbnail' width='40px'>";
            /* INICIAMOS UNA CONSULTA PARA TRAER LA CATEGORÍA DE CADA PRODUCTO, SEGUN DEL DATO IDCATEGORIA */
            $item = "id";
            $valor = $productos[$i]["id_categoria"];
            $categoria = ControladorCategorias::ctrMostrarCategorias($item, $valor);
            /* Y QUE LUEGO USAREMOS EN  "'.$categoria["categoria"].'",*/
            /* STOCK */
            if($productos[$i]["stock"] <=10){
                $stock = "<button class='btn btn-danger'>".$productos[$i]["stock"]."</button>";
            }else if ($productos[$i]["stock"]>11 && $productos[$i]["stock"]<=18){
                $stock = "<button class='btn btn-warning'>".$productos[$i]["stock"]."</button>";
            }else{
                $stock = "<button class='btn btn-success'>".$productos[$i]["stock"]."</button>";
            }
            /* SE CREAN LOS BOTONES CON SUS IDS Y PARAMETROS, POSTERIORMENTE SE AGREAN A DATOSJSON */
            $botones = "<div class='btn-group'><button class='btn btn-warning btnEditarProducto'idProducto='".$productos[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."' codigo='".$productos[$i]["codigo"]."' imagen='".$productos[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>";
            $datosJson.='[
                "'.($i+1).'",
                "'.$imagen.'",
                "'.$productos[$i]["codigo"].'",
                "'.$productos[$i]["descripcion"].'",
                "'.$categoria["categoria"].'",
                "'.$stock.'",
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
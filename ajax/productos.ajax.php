<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxProductos{

	/* AGREGANDO EL PRODUCTO */
    public $idCategoria;

	public function ajaxCrearCodigoProducto(){
		$item = "id_categoria";
		$valor = $this->idCategoria;
		$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
		echo json_encode($respuesta);
	}

	/* EDITANDO EL PRODUCTO */
	public $idProducto;
	public function ajaxEditarProducto(){
		$item = "id";
		$valor = $this->idProducto;
		$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);
		echo json_encode($respuesta);
	}
}

/*=============================================
GENERANDO EL CODIGO PRODUCTO A TRAVES DE LA CATEGORIA
=============================================*/
if(isset($_POST["idCategoria"])){
	$codigoProducto = new AjaxProductos();
	$codigoProducto -> idCategoria = $_POST["idCategoria"];
	$codigoProducto -> ajaxCrearCodigoProducto();
}

/* EDITAR PRODUCTO */
if(isset($_POST["idProducto"])){
	$editarProducto = new AjaxProductos();
	$editarProducto -> idProducto = $_POST["idProducto"];
	$editarProducto -> ajaxEditarProducto();
}
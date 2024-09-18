/* EL SIGUIENTE MODELO DE AJAX SE UTILIZÓ PARA MOSTRAR LA TABLA EN CONSOLA */
/* $.ajax({
    url: "ajax/datatable-productos.ajax.php",
    success: function(respuesta){
        console.log("respuesta", respuesta);
    }
}) */

/*=============================================
SUBIENDO LA FOTO DEL USUARIO
=============================================*/
$(".nuevaImagen").change(function(){
	var imagen = this.files[0];
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/
  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
  		$(".nuevaImagen").val("");
  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });
  	}else if(imagen["size"] > 2000000){
  		$(".nuevaImagen").val("");
  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });
  	}else{
  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);
  		$(datosImagen).on("load", function(event){
  			var rutaImagen = event.target.result;
  			$(".previsualizar").attr("src", rutaImagen);
  		})
  	}
})

	/* CARGAR LA TABLA DINAMICA DE PRODUCTOS */
$('.tablaProductos').DataTable({
    "ajax": "ajax/datatable-productos.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
    "language": {
		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}
	}
});

/* CREANDO EL CODIGO EN FUNCION DEL CAMBIO EN EL SELECT NUEVACATEGORIA */
$("#nuevaCategoria").change(function(){
	var idCategoria = $(this).val();
	var datos = new FormData();
	datos.append("idCategoria", idCategoria);
	$.ajax({
		url: "ajax/productos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			if(!respuesta){
				var nuevoCodigo = idCategoria + "01";
				$("#nuevoCodigo").val(nuevoCodigo);
			}else{
				var nuevoCodigo = Number(respuesta["codigo"]) + 1;
				$("#nuevoCodigo").val(nuevoCodigo);
			}
			console.log("nuevoCodigo", nuevoCodigo);
		}
	})
})

/* MODIFICANDO EL PRECIO DE VENTA EN FUNCION DEL PRECIO COMPRA */
$("#nuevoPrecioCompra").change(function(){
	if($(".porcentaje").prop("checked")){
		var valorPorcentaje = $(".nuevoPorcentaje").val();
		var porcentaje = Number(($("#nuevoPrecioCompra").val()*valorPorcentaje/100))+Number($("#nuevoPrecioCompra").val());
		$("#nuevoPrecioVenta").val(porcentaje);
		$("#nuevoPrecioVenta").prop("readonly", true);
	}
})

/* CAMBIO DE PORCENTAJE */
$(".nuevoPorcentaje").change(function(){
	if($(".porcentaje").prop("checked")){
		var valorPorcentaje = $(".nuevoPorcentaje").val();
		var porcentaje = Number(($("#nuevoPrecioCompra").val()*valorPorcentaje/100))+Number($("#nuevoPrecioCompra").val());
		$("#nuevoPrecioVenta").val(porcentaje);
		$("#nuevoPrecioVenta").prop("readonly", true);
	}
})

$(".porcentaje").on("ifUnchecked",function(){
	$("#nuevoPrecioVenta").prop("readonly", false);
})
$(".porcentaje").on("ifChecked",function(){
	$("#nuevoPrecioVenta").prop("readonly", true);
})

/* ELIMINANDO EL PRODUCTO */
$(".tablaProductos").on("click", ".btnEliminarProducto",function(){
	var idProducto = $(this).attr("idProducto");
	var codigo = $(this).attr("codigo");
	var imagen = $(this).attr("imagen");

	swal({
		title: "¿Está seguro de borrar el producto??",
		text: "¡Si no lo está puede cancelar la acción!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		cancelButtonText: "Cancelar",
		confirmButtonText: "Si, borra producto."
	}).then((result)=>{
		if(result.value){
			window.location = "index.php?ruta=productos&idProducto="+idProducto+"&codigo="+codigo+"&imagen="+imagen;
		}
	})
})
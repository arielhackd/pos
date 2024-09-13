/* CARGAR LA TABLA DINAMICA DE PRODUCTOS */
$.ajax({
    url: "ajax/datatable-productos.ajax.php",
    success: function(respuesta){
        console.log("respuesta", respuesta);
    }
})

$('.tablaProductos').DataTable({
    "ajax": "ajax/datatable-productos.ajax.php"
});
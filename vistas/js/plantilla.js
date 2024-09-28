/* SIDEBAR MENU */
$('.sidebar-menu').tree()

/* ACTIVACION DE DATA TABLES */
$(".tablas").DataTable({
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

//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
	checkboxClass: 'icheckbox_flat-green',
	radioClass   : 'iradio_flat-green'
})

/* INPUT MASK */
/* DateMask dd/mm/yyyy */
$('#datemask').inputmask('dd/mm/yyyy', {'placeholder':'dd/mm/yyyy'})
/* DateMask2 mm/dd/yyyy */
$('#datemask2').inputmask('mm/dd/yyyy', {'placeholder':'mm/dd/yyyy'})
/* MONEY EURO */
$('[data-mask]').inputmask()
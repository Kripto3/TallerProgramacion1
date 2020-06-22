var app = app || {};

app.track = (function () {
    var self = this;

    self.init = function () {

      limpiarForm();
    };

    
    limpiarForm = function () {
    	$('.btnConsultas').click(function(){
    		var $form = $('.formConsultas');
    		   $form[0].reset();
    		  alert("Formulario disponible próximamente.");
    	});
    }
    
    return self;
})();

$(document).ready(function() {
    $('.dropdown-toggle').dropdown()
    $('#example').DataTable( {
        responsive: true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
        }
    });
} );

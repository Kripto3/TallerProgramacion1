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
    $('#example').DataTable();
} );
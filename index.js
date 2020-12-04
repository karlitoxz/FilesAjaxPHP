$(document).ready(function() {
	console.log('Ready');
});


	function p08opcion(){

var data = new FormData();

		//Form data
		var form_data = $('#formP08').serializeArray();
		$.each(form_data, function (key, input) {
		    data.append(input.name, input.value);
		});

		//File data
		var file_data = $('#filesP08')[0].files;
		for (var i = 0; i < file_data.length; i++) {
		    data.append("filesP08[]", file_data[i]);
		}

		//Custom data
		data.append('form', 'ctrFormP08');

 	//Enviar formulario al controlador
	 $.ajax({
		type: 'POST', 	
		url: "submit.php",
		data: data,
		processData: false,
    	contentType: false,
		})
	  .done(function( result ) {
	  	console.log("datos enviados: ", data);
	  	console.log("datos recibidos: ",result);
  	});
	//Enviar formulario al controlador
}
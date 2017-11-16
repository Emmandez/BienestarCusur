//Pass code from the layout to the form.
var codigoLayout = document.getElementById('codigoPaciente').value,
	codigoForm  = document.getElementById('codigoPacienteForm'),
	

	

$('#btnQuery').on('click', function(){
	codigoForm.value=codigoLayout;
});




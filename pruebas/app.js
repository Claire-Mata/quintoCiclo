// buscar registro individual
$('#enviar').on('click', function() {
    if ($('#password').val()==''|| $('#email').val()=='') {
		//agregar un html a algo
  		$('#passlHelper').html('por favor rellene el campo')
  		//agregar un html a algo
  		$('#emailHelper').html('por favor rellene el campo')

    } else{
		let password=$('#password').val()
		let email=$('#email').val()
		$('#form1').html('')
		$('#mostrar').load('registro1.php', { password: password, email: email })

    }
})

// Ver todos
$(document).on('click', '#verTodos', function(event) {
  	$('#form1').html('')
	 $('#mostrar').load('registro2.php')
})
//boton retornar
$(document).on('click', '#retornar', function(event) {
  	location.href = 'login.php';
})
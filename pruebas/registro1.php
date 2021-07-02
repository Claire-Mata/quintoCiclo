<?php
/*
* Traer correo y password y buscar en archivo json a ver si existe
*/
// Obtener el contenido del archivo JSON
	$jsonfile = file_get_contents("users.json");
	// Convertir en array
	$array = json_decode($jsonfile, true);
    $email = $_POST['email'];
	$password=$_POST['password'];
	$existe=false;

	foreach($array as $key => $val) {
		foreach ($array[$key] as $key2 => $val2){
			if ($email==$array[$key][$key2]['email'] && $password==$array[$key][$key2]['password']){
                $existe=true;
                $nombre2=" <strong>"."Nombre de pila: </strong>".$array[$key][$key2]['nombre']; 
				$nombre=" <strong>"."Nombre completo: </strong>".$array[$key][$key2]['nombre']." ".$array[$key][$key2]['apellido'];
				$cargo= " <strong>"."Cargo: </strong>".$array[$key][$key2]['cargo'];
				$nac= " <strong>"."Nacionalidad: </strong>".$array[$key][$key2]['nacionalidad'];
				$edad= "<strong>"."Edad: </strong>".$array[$key][$key2]['edad'];
				$tel=" <strong>"."Telefono: </strong>".$array[$key][$key2]['telefono'];
				$email=" <strong>"."Email: </strong>".$array[$key][$key2]['email'];
			}
		}
	}
	?>

				    <!--para agregar fondo es bg "-fluid" es para que el contenedor
				    tenga un 100% "text-light" es para hacer blanca las letras "p-2"
				    es para darle pading -->
				    <div class="container-fluid bg-info text-light p-2">
				        <!--para hacer una tipo "tabla" solo es agregar
				        una clase "row" igual con las columnas-->
				        <div class="row">
				            <div class="col">
				                <!--para hacer que el elemento flote a la derecha
				                y end es para mover a las derecha y start es para la
				            izquierda -->
				                <span class="float-start p-2">Informaci&oacute;n</span>
				            </div>
				            <!--aqui le dejamos de tamanio 6-->
				        </div>

				    </div>
				    <!--"my-5" es para margen en y (arriba y abajo)-->
				    <div  class="container-fluid my-5">
				        <div class="row  mostrar2">

							<?php
							if($existe==true){ ?>
				            <div class="col-3">
				                <div class="card shadow">
                                <div class="card-header  bg-info text-light">
                                                Datos de trabajo
                                            </div>
				                    <div class="card-body">
									
										 <p class="card-text mb-1"> <?= $nombre2 ?></p>
                                         <p class="card-text mb-1"> <?= $cargo ?></p>
                                         <p class="card-text mb-1"> <?= $nac ?></p>
                                    </div>
								</div>
							</div>
							  <div class="col-6 flex-grow-1">
				                <div class="card shadow">
                                <div class="card-header  bg-info text-light">
                                                Datos personales
                                            </div>
				                    <div class="card-body">
                                    <p class="card-text mb-1"> <?= $nombre ?></p>
                                    <p class="card-text mb-1"> <?= $edad ?></p>
                                    <p class="card-text mb-1"> <?= $tel ?></p>
                                    <p class="card-text mb-1"> <?= $email ?></p>
									</div>
								</div>
							</div>

								<?php
								}
								if($existe==false){?>
									<div class="alert alert-primary" role="alert">
                                    
									  No existe el usuario:  <?php echo $email ?>

									</div>

								<?php }

				                ?>

				        </div>

				    </div>
                    

                    <div  class="container-fluid my-5">
							
							<div class="justify-content-center ">
								<div class="border border-light p-3 mb-4">
							<div class="text-center">
							<button type="button" id="verTodos" class="btn btn-outline-info">Ver Todos</button>
							</div>
						</div>
									
							</div>
						</div>


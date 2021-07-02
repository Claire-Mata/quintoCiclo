<?php
// Obtener el contenido del archivo JSON
	$jsonfile = file_get_contents("users.json");
	// Convertir en array
	$array = json_decode($jsonfile, true);

	?>


				    <div class="container-fluid bg-info text-light p-2">
				        <div class="row">
				            <div class="col">
				                <span class="float-start p-2">Informaci&oacute;n</span>
				            </div>

				            
				        </div>

				    </div>
				    <!--"my-5" es para margen en y (arriba y abajo)-->
				    <div id="mostrar1" class="container-fluid my-4">
				        <div class="row justify-content-center mostrar2 ">

                            <?php
                            //primero iteramos sobre el array para tener los pares clave valor del json
                            //la primera clave que es usuarios
                            foreach($array as $key => $val) {
                                foreach ($array[$key] as $key2 => $val2){
                                    //aqui se obtiene las filas que contienen las claves tales como 
                                    //nombre, apellido; y los valores de cada uno por ejemplo para
                                    //la clave nombre en valor es juan.
                                ?>
                                <div class="row  my-2">
                                <div class="card-header  bg-info text-light ">
                                                Datos Personales
                                            </div>
                                
                                    
                                        <div class="card shadow">
                                            
                                            <div class="card-body ">

                                                <?php

                                                //aqui la primera clave es usuario (key), la segunda (key2['']) es el nombre y su valor
                                                $datos=" <h6><strong>"."Nombre Completo: </strong>".$array[$key][$key2]['nombre']." ".$array[$key][$key2]['apellido'];
                                                $datos.="&nbsp;<strong>"."Edad: </strong>".$array[$key][$key2]['edad']." ";
                                                $datos.= "&nbsp;<strong>"."Telefono: </strong>".$array[$key][$key2]['telefono']." ";
                                                $datos.= "&nbsp;<strong>"."Email:</strong>".$array[$key][$key2]['email']." ";
                                                $datos.="&nbsp;<strong>"."Cargo: </strong>".$array[$key][$key2]['cargo']." ";
                                                $datos.="&nbsp;<strong>"."Nacionalidad: </strong>".$array[$key][$key2]['nacionalidad']." <h6>";
                                                echo $datos;
                                                ?>
                                            </div>
                                        
                                        </div>
                                       
                                    
                                    
                                </div>
                        <?php	}
                            } ?>



				        </div>
				    </div>
						<div  class="container-fluid my-5">
							
							<div class="justify-content-center ">
								<div class="border border-light p-3 mb-4">
							<div class="text-center">
							 <button type="button" id="retornar" class="btn btn-outline-info">Retornar</button>
							</div>
						</div>
									
							</div>
						</div>
						
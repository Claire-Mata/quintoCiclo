<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--aqui pegamos el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Booststrap 5</title>
</head>
<body>
    <!--para agregar fondo es bg "-fluid" es para que el contenedor
    tenga un 100% "text-light" es para hacer blanca las letras "p-2" 
    es para darle pading -->
    <div class="container-fluid bg-primary text-light p-2">
        <!--para hacer una tipo "tabla" solo es agregar 
        una clase "row" igual con las columnas-->
        <div class="row">
            <div class="col">
                <!--para hacer que el elemento flote a la derecha
                y end es para mover a las derecha y start es para la 
            izquierda -->
                <span class="float-start p-2">Descargas</span>
            </div>
            <!--aqui le dejamos de tamanio 6-->
            <div class="col-6">
                <!--aqui ya le da un estilo predefinido de boostrap
                y le dara un 100% del contenedor, en este caso la columna
                "col-sm-4" es para cuando sea para celular se pone eso
                si es pantalla mediano es "col-md-2" un ejemplo va
                para largo es "col-lg-5"-->
                <input class="form-control bg-transparent col-sm-4" type="text" placeholder="Buscar descargas">
            </div>
            <div class="col">
                <!--aqui en "px-4" hacemos que tenga pading en el
                eje de las x (derecha e izquierda) de tamanio 4-->
                <span class="float-end px-4 col-sm-4">...</span>
            </div>
        </div>

    </div>
    <!--"my-5" es para margen en y (arriba y abajo)-->
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body">
                <?php
                $a=2;
                $b=3;
                $c=$a+$b;
                $t1="texto 1 ";
                $t2="texto 2";
                $t3=$t1." - ".$t2;
                ?>
            
              <h6>Ejemplo de recogida de datos sin comprobaci??n (Resultado)</h6>
              <p>Su nombre es <strong>Pepito Conejo</strong>.</p>
            
              <p>Su edad es <strong><?php echo $c?></strong> a??os.</p>
              <p>concatenar cadenas en php:</p>
              <p><?php echo $t3?></p>
            </div>
        </div>
    </div>
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body">
                      <h6 class="card-title text-primary">Ejercicios TOO #3</h6>
                      <h6 class="card-subtitle mb-2 text-muted">un link cualquiera</h6>
                      <p class="card-text"></p>
                      <a href="#" class="card-link">Mostrar en carpeta</a>
                    </div>
                  </div>

            </div>   
        </div>
    </div>
    
    
</body>
</html>

<?php
//ejemplo
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  
    Ejercicios. PHP.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
	<?php
	$a=2;
	$b=3;
	$c=$a+$b;
	$t1="texto 1 ";
	$t2="texto 2";
	$t3=$t1." - ".$t2;
	?>

  <h1>Ejemplo de recogida de datos sin comprobación (Resultado)</h1>
  <p>Su nombre es <strong>Pepito Conejo</strong>.</p>

  <p>Su edad es <strong><?php echo $c?></strong> años.</p>
  <p>concatenar cadenas en php:</p>
  <p><?php echo $t3?></p>
  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2016-10-26"><?php echo date("d-m-Y");?></time>
    </p>

   
  </footer>
</body>
</html>

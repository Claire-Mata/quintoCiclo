<?php
//Get
//no se debe hacer por get ya que 
//se pueden ver los datos
//si una variable esta seteada "isset"
//si una variable viene vacio "empty"
if (empty($_GET)) {
    echo "Por favor rellene el formulario!";
}else{
    /*echo "Muy bien! <br>";
    var_dump(isset($_GET["name"]));
    echo"<br>";
    var_dump($_GET["email"]);
    echo"<br>";
    //BUSCAR ELEMENTOS in_array, array_search
    //que busco y donde busco
    var_dump(in_array("anita", $_GET));
    echo"<br>";
    //te dice donde esta lo que buscamos
    var_dump(array_search("anita", $_GET));
    //ORDENAMIENTO
    echo"<br>";
    $copy1= $copy2 = $copy3 = $copy4 = $_GET;
    var_dump($_GET);
    //me coloca el indice, no la clave, ejemplo "lenguaje" es un 1
    //asi que solo sale "1"
    sort($copy1);
    echo"<br>";
    var_dump($copy1);
    //lo mismo pero a la inversa
    rsort($copy2);
    echo"<br>";
    var_dump($copy2);
    //me da la clave, pero igual me lo ordena como sort
    asort($copy3);
    echo"<br>";
    var_dump($copy3);
    //me lo ordena en reversa
    arsort($copy4);
    echo"<br>";
    var_dump($copy4);
    //luego esta ksort , krsort, que me lo ordena por clave
    //no por valor, los anteriores me lo ordenaba por valor
    //JSON
    // me pasa un array asociativo de php a un objeto json 
    
   print_r($_GET);
   
    echo"<br>";
    echo"<br>";

    
    $json = json_encode($_GET);
    echo"<br>";
    echo "<pre>";
    echo $json;
    echo "</pre>";
    echo"<br>";
    echo"<br>";

    $json2 = json_encode($_GET, JSON_PRETTY_PRINT);
    echo"<br>";
    echo "<pre>";
    echo $json2;
    echo "</pre>";
    echo"<br>";
    echo"<br>";

    //crear archivos y me lo manda
    file_put_contents("datos.json", $json2);
*/

    $miJson= file_get_contents("datos.json");
    //convertir a un array
    $miArr = json_decode($miJson, TRUE);
    echo "<pre>";
    print_r($miArr);
    echo "</pre>";
}




?>
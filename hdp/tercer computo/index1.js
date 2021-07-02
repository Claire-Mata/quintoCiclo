//con jQuery, la diferencia es el tamnio de lo que hare
//seleccionar es con $, si fuera id seria #id y asi
$("button").on("click", function(){
    alert("hola desde jquery");
    //agregar clase
    $("button.agregarHtml").addClass("miClaseJquery");
    $("button.agregarHtml").html("hola JQuery");


})

$("p").click(function(){
    console.log("este es mi evento del parrafo")
})

$(document).ready(function(){
   /* $("p.alert").click(function(){
        alert("listo");
    })*/
    $("<button class='alert'>Hola!</button>").appendTo(document.body);

    $("<button.alert").click(function(){
        alert("este es mi alert");
    });
    //aqui se quita la funcion
    $("button.off").click(function(){
        $("button.alert").off("click");
    })
})
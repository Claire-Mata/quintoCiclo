/*document.querySelector("button").addEventListener("click", function() {
    alert("hola desde javascript normal");
    //agregar una clase
    document.querySelector("button").classlist.add("miclasejs")
    
});*/

//usando jquery
//seleccionar un elemento
$("button").on("click", function() {
    alert("hola desde jQuery");
    //agregar clase
    $("button.agregarHtml").addClass("miclaseJquery");
    //agregar un html a algo
    $("button.agregarHtml").html("holaaa");
});
//agregar evento
$("p").click(function () {
    console.log("mi evento en el parrafo");
});
//usar jquery cuando mi documento este cargado
$(document).ready(function () {
    $("p.alert").click(function () {
        alert("Sizhun!!");
    });

    //crear elementos
    $("<button class='alerta'>Buenas noches Sizhun</button>").appendTo(document.body);
    $("button.alerta").click(function () {
        alert("0_0");
    });
    $("button.off").click(function () {
        //me apaga el evento 
        $("button.alerta").off("click");
    });
    
})



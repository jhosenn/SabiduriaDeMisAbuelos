$(document).ready(function(){
    $.ajax({
        url: '../controlador/Nota/consultarGeneralNota.php',
        dataType: 'json'
    }).done(function(response){
        var tabla = "";
        $.each(response, function(index, data){
            tabla += "<tr>";
            tabla += "<td>" + data.nombrenota + "</td>";
            tabla += "<td>";
            tabla += "<button class='btn btn-warning' onclick='Modificar(" + data.idnota + ");'>Modificar</button>"
            tabla += "<button class='btn btn-danger' onclick='Eliminar(" + data.idnota + ");'>Eliminar</button>"
            tabla += "</td>"
            tabla += "</tr>";
        });

        $('#tabla').html(tabla);
    }).fail(function(response){
        console.log(response);
    });
});

function guardar(){
    var nota = $('#nota').val();

    if(nota == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/Nota/guardarDatosFromnota.php',
        data: { "Nombrenota" : nota },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos de la nota se han guardado de forma exitosa");
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}

function Eliminar(idEliminar){
    $.ajax({
        url: '../controlador/Nota/eliminar.nota.php',
        data: { "idnota" : idnota },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos se han eliminado de forma exitosa");
            window.location = "guardaDatosFromnota";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });   
}


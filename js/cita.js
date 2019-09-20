$(document).ready(function(){
    $.ajax({
        url: '../controlador/cita/consultarGeneralCita.php',
        dataType: 'json'
    }).done(function(response){
        var tabla = "";
        $.each(response, function(index, data){
            tabla += "<tr>";
            tabla += "<td>" + data.nombrecita + "</td>";
            tabla += "<td>";
            tabla += "<button class='btn btn-warning' onclick='Modificar(" + data.idcita + ");'>Modificar</button>"
            tabla += "<button class='btn btn-danger' onclick='Eliminar(" + data.idcita + ");'>Eliminar</button>"
            tabla += "</td>"
            tabla += "</tr>";
        });

        $('#tabla').html(tabla);
    }).fail(function(response){
        console.log(response);
    });
});

function guardar(){
    var cita = $('#cita').val();

    if(cita == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/cita/guardarDatosFromcita.php',
        data: { "Nombrecita" : cita },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos de la cita se han guardado de forma exitosa");
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}

function Eliminar(idEliminar){
    $.ajax({
        url: '../controlador/cita/eliminar.cita.php',
        data: { "idcita" : idcita },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos se han eliminado de forma exitosa");
            window.location = "guardaDatosFromcita";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });   
}


function Modificar(idcita){
    window.location = "cita-modificar.php?id=" + idcita;
}

function ModificarRegistro(idcita){
    var cita = $('#cita').val();

    if(cita == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/cita/modificar.cita.php',
        data: { "Nombrecita" : edcita, "idcita" : idcita },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos de la cita se han modificado de forma exitosa");
            window.location = "guardaDatosFromcita";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}
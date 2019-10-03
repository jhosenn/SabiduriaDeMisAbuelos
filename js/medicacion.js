$(document).ready(function(){
    $.ajax({
        url: '../controlador/medicacion/consultarGeneralMedicacion.php',
        dataType: 'json'
    }).done(function(response){
        var tabla = "";
        $.each(response, function(index, data){
            tabla += "<tr>";
            tabla += "<td>" + data.nombremedicacion + "</td>";
            tabla += "<td>";
            tabla += "<button class='btn btn-warning' onclick='Modificar(" + data.idformula + ");'>Modificar</button>"
            tabla += "<button class='btn btn-danger' onclick='Eliminar(" + data.idformula + ");'>Eliminar</button>"
            tabla += "</td>"
            tabla += "</tr>";
        });

        $('#tabla').html(tabla);
    }).fail(function(response){
        console.log(response);
    });
});

function guardar(){
    var medicacion = $('#medicacion').val();

    if(medicacion == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/Medicacion/guardarDatosFrommedicacion.php',
        data: { "nombremedicacion" : medicacion },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos de la medicacion se han guardado de forma exitosa");
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}

function Eliminar(idEliminar){
    $.ajax({
        url: '../controlador/Medicacion/eliminar.medicacion.php',
        data: { "idformula" : idformula },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos se han eliminado de forma exitosa");
            window.location = "guardarDatosFrommedicacion";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });   
}


function Modificar(idformula){
    window.location = "medicacion-modificar.php?id=" + idformula;
}

function ModificarRegistro(idmedicacion){
    var medicacion = $('#medicacion').val();

    if(medicacion == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/Medicacion/modificar.medicacion.php',
        data: { "Nombremedicaion" : edformula, "idformula" : idformula },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos de la medicacion se han modificado de forma exitosa");
            window.location = "guardarDatosFrommedicacion";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}
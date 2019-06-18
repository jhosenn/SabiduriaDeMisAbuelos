$(document).ready(function(){
    $.ajax({
        url: '../controlador/libros/consulta.libros.php',
        dataType: 'json'
    }).done(function(response){
        var tabla = "";
        $.each(response, function(index, data){
            tabla += "<tr>";
            tabla += "<td>" + data.nombre_autor + "</td>";
            tabla += "<td>";
            tabla += "<button class='btn btn-warning' onclick='Modificar(" + data.Id_libros + ");'>Modificar</button>"
            tabla += "<button class='btn btn-danger' onclick='Eliminar(" + data.Id_libros + ");'>Eliminar</button>"
            tabla += "</td>"
            tabla += "</tr>";
        });

        $('#tabla').html(tabla);
    }).fail(function(response){
        console.log(response);
    });
});


function guardar(e){
    var libros = $('#libros').val();

    if(libros == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/libros/guardar.libros.php',
        data: { "nombre_autor" : autores },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos del libro se han guardado de forma exitosa");
        }else{
            console.log(response);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}

function Eliminar(idEliminar){
    $.ajax({
        url: '../controlador/libros/eliminar.libros.php',
        data: { "Id_libros" : idEliminar },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos se han eliminado de forma exitosa");
            window.location = "autores-consulta.html";
        }else{
            console.log(response);
        }
    }).fail(function(response){
        console.log(response);
    });   
}


function Modificar(Id_libros){
    window.location = "libros-modificar.php?id=" + Id_libros;
}

function ModificarRegistro(id_libros){
    var libros = $('#libros').val();

    if(libros == ""){
        alert("Debe llenar todos los campos");
        return;
    }

    // Guardar
    $.ajax({
        url: '../controlador/autores/modificar.autores.php',
        data: { "nombre_autor" : libros, "Id_libros" : Id_libros },
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response.Respuesta == "OK"){
            alert("Los datos del libro se han modificado de forma exitosa");
            window.location = "libros-consulta.html";
        }else{
            console.log(response.errorText);
        }
    }).fail(function(response){
        console.log(response.errorText);
    });
}

function limpiar(){
    $('#libros').val("");
}
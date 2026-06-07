$(document).ready(function(){
    tablaServicios = $("#tablaServicios").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formServicios").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Servicio");            
    $("#modalCRUD").modal("show");        
    codigo=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    codigo = parseInt(fila.find('td:eq(0)').text());
    tipo = fila.find('td:eq(1)').text();
    precio = parseInt(fila.find('td:eq(2)').text());
    correo = fila.find('td:eq(3)').text();
    telefono = parseInt(fila.find('td:eq(4)').text());
    localidad = fila.find('td:eq(5)').text();
    
    $("#tipo").val(tipo);
    $("#precio").val(precio);
    $("#correo").val(correo);
    $("#telefono").val(telefono);
    $("#localidad").val(localidad);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    codigo = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+codigo+"?");
    if(respuesta){
        $.ajax({
            url: "../bd/clasificado.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, codigo:codigo},
            success: function(){
                tablaservicios.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formServicios").submit(function(e){
    e.preventDefault();    
    tipo = $.trim($("#tipo").val());
    precio = $.trim($("#precio").val());
    correo = $.trim($("#correo").val()); 
    telefono = $.trim($("#telefono").val());
    localidad = $.trim($("#localidad").val());
    $.ajax({
        url: "../bd/clasificado.php",
        type: "POST",
        dataType: "json",
        data: {tipo:tipo, precio:precio, correo:correo, telefono:telefono, localidad:localidad, codigo:codigo, opcion:opcion},
        success: function(data){  
            console.log(data);
            codigo = data[0].codigo;            
            tipo = data[0].tipo;
            precio = data[0].precio;
            correo = data[0].correo;
            telefono = data[0].telefono;
            localidad = data[0].localidad;
            if(opcion == 1){tablaservicios.row.add([codigo,tipo,precio,correo,telefono,localidad]).draw();}
            else{tablaservicios.row(fila).data([codigo,tipo,precio,correo,telefono,localidad]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});

$(".tablas").on("click", ".btnEditarLibro", function() {

    var idLibro = $(this).attr("idLibro");

    var datos = new FormData();
    datos.append("idLibro", idLibro); // Corrección de idLlibros a idLibro

    $.ajax({
        url: "ajax/libros.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#id_libros").val(respuesta["id_libros"]);
            $("#editarTitulo").val(respuesta["titulo"]);
            $("#editarAutor").val(respuesta["autor"]);
            $("#editarGenero").val(respuesta["genero"]);
            $("#editarAnio_publicacion").val(respuesta["anio_publicacion"]);
            $("#editarDisponibilidad").attr("checked", respuesta["disponibilidad"] == 1);
            $("#editarStock").val(respuesta["stock"]);
        }
    })
})



$(".tablas").on("click", ".btnEliminarLibro", function(){


    var idLibro = $(this).attr("idLibro");



   swal({
    title: '¿Está seguro de borrar el libro?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: '¡Si, borrar libros!'
   }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=libros&idLibro="+idLibro;

  }



   })






})

$.ajax({
    // Método principal de jQuery para realizar el proceso AJAX
    // Simplifica el proceso AJAX ya que no necesita:
    //  Crear manualmente un objeto XMLHttpRequest
    //  Gestionar los eventos de cambio de estado (onreadystatechange).
    // Proceso de peticion HTTP
    url: "data.txt",       // La URL del recurso solicitado
    type: "GET",           // Método HTTP
    // Función de éxito, que se ejecuta cuando la solicitud es completada con éxito (Código de estado HTTP 200).
    // La variable result contiene la respuesta del servidor (equivalente a this.responseText en JavaScript puro).
    success: function(result) {
        // Actualiza el contenido del elemento con id 'demo'
        $("#demo").html(result);  
    },
    // Función de error, que se ejecuta si ocurre un error durante la solicitud AJAX
    // Los parámetros xhr, status y error proporcionan detalles sobre el error.
    //  xhr: Es el objeto XMLHttpRequest que contiene información sobre la solicitud fallida.
    //  status: Proporciona el estado de la solicitud (por ejemplo, "error", "timeout", etc.).
    //  error: Proporciona un mensaje descriptivo del error, útil para depuración.
    error: function(xhr, status, error) {
        console.log("Error: " + error);  // Maneja los errores
    }
});

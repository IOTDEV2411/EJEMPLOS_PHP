// Paso N01: Creacion del objeto "xhttp", de la clase XMLHttpRequest, para peticiones HTTP asincronas
var xhttp = new XMLHttpRequest();
// Paso N02: Configuracion de la peticion HTTP
xhttp.open("GET", "data.txt", true);
// Paso N03: Envio de la peticion HTTP hacia el servidor
xhttp.send();
// Paso N04: Definicion de la funcion que manejara el cambio de estados ante la respuesta del servidor
//           readyState: Representa los diferentes estados por el que pasa el objeto "xhttp"
//                       Posibles Valores:
//                          0: UNSENT: El cliente ha sido creado, pero el método open() no ha sido llamado.
//                          1: OPENED: open() ha sido llamado.
//                          2: HEADERS_RECEIVED: send() ha sido llamado, y las cabeceras y el estado están disponibles.
//                          3: LOADING: La descarga está en progreso; algunos datos ya han sido recibidos.
//                          4: DONE: La operación ha sido completada, y la respuesta está disponible.
//           state: Representa el codigo de estado HTTP recibido desde el servidor
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Paso N05: Si se completo correctamente la peticion y esta ha sido existosa, actualizar la pagina
        document.getElementById("demo").innerHTML = this.responseText;
    }
};
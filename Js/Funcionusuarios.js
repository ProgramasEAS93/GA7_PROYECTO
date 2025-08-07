// Seleccionamos el formulario con el ID 'form'
const formulariop = document.querySelector('#form');

// Añadimos un event listener para el evento 'submit' del formulario
formulariop.addEventListener('submit', (e) => {
     // Evita que el formulario se envíe de forma tradicional (recargando la página)
    e.preventDefault();

    // Obtenemos los valores ingresados en cada campo del formulario
    var NomUsuario = document.getElementById("NomUsuario").value;
    var NombreCompleto = document.getElementById("NombreCompleto").value;
    var Clave = document.getElementById("Clave").value;
    var Estado = document.getElementById("Estado").value;
    var FechaCreacion = document.getElementById("FechaCreacion").value;

     // Validación: si alguno de los campos está vacío, se muestra una alerta y se cancela el envío

    if (NomUsuario === '' || NombreCompleto === '' || Clave === '' || Estado === '' || FechaCreacion === '') {
        Swal.fire({
            title: "Error",
            text: "Los campos no pueden ir vacíos",
            icon: "warning"
        });
        return;// Detiene la ejecución de la función
    }

    // Si todos los campos están completos, se crea un objeto FormData con los datos del formulario
    const datos = new FormData(formulariop);
    // Se añade un campo adicional para indicar el tipo de operación (puede ser útil en el servidor)
    datos.append("tipo_operacion", "guardar");

    // Se envían los datos al servidor usando fetch con método POST
    fetch('./Modelo/llamarfuncionusuarios.php', {
        method: 'POST',
        body: datos
    })
    .then(response => response.json())// Se espera una respuesta en formato JSON
    .then(data => {
         // Si la respuesta es exitosa, se muestra un mensaje de éxito y se limpia el formulario
        Swal.fire({
            title: "OK",
            text: "Registro insertado correctamente",
            icon: "success"
        });
        formulariop.reset();
    })
    .catch(error => {
        // Si hay un error en la solicitud fetch, se muestra en consola y un mensaje de error
        console.error(error);
        alert("Error al insertar");
    });
});
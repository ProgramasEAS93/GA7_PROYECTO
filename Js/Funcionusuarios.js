const formulariop = document.querySelector('#form');

formulariop.addEventListener('submit', (e) => {
    e.preventDefault();

    // Variables correctas
    var NomUsuario = document.getElementById("NomUsuario").value;
    var NombreCompleto = document.getElementById("NombreCompleto").value;
    var Clave = document.getElementById("Clave").value;
    var Estado = document.getElementById("Estado").value;
    var FechaCreacion = document.getElementById("FechaCreacion").value;

    if (NomUsuario === '' || NombreCompleto === '' || Clave === '' || Estado === '' || FechaCreacion === '') {
        Swal.fire({
            title: "Error",
            text: "Los campos no pueden ir vacíos",
            icon: "warning"
        });
        return;
    }

    const datos = new FormData(formulariop);
    datos.append("tipo_operacion", "guardar");

    fetch('./Modelo/llamarfuncionusuarios.php', {
        method: 'POST',
        body: datos
    })
    .then(response => response.json())
    .then(data => {
        Swal.fire({
            title: "OK",
            text: "Registro insertado correctamente",
            icon: "success"
        });
        formulariop.reset();
    })
    .catch(error => {
        console.error(error);
        alert("Error al insertar");
    });
});
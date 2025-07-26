<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema Maquila</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <script>
        // Simulación de usuario logueado
        const usuarioLogueado = "Juan Pérez";
        
        function agregarReferencia(event) {
            event.preventDefault();
            
            let codigo = document.getElementById("codigo").value;
            let descripcion = document.getElementById("descripcion").value;
            let linea = document.getElementById("linea").value;
            let genero = document.getElementById("genero").value;
            
            let tabla = document.getElementById("tablaReferencias").getElementsByTagName('tbody')[0];
            let newRow = tabla.insertRow();
            newRow.innerHTML = `<td>${codigo}</td><td>${descripcion}</td><td>${linea}</td><td>${genero}</td><td><button class='btn btn-warning btn-sm'>Modificar</button> <button class='btn btn-danger btn-sm'>Eliminar</button></td>`;
            
            document.getElementById("codigo").value = "";
            document.getElementById("descripcion").value = "";
            document.getElementById("linea").value = "";
            document.getElementById("genero").value = "";
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d6efd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="usuariosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Usuarios</a>
                    <ul class="dropdown-menu" aria-labelledby="usuariosDropdown">
                        <li><a class="dropdown-item" href="GestionUsuario.php">Gestión de Usuarios</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="GestionClientes.php">Gestión de Clientes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="referenciasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Referencias</a>
                    <ul class="dropdown-menu" aria-labelledby="referenciasDropdown">
                        <li><a class="dropdown-item" href="GestionReferencias.php">Gestión de Referencias</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proveedores</a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="GestionProveedores.php">Gestión de Proveedores</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ordenes de Produccion</a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="GestionOP.php">Gestión de Ordenes de Produccion</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ordenes de Trabajo</a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="GestionOT.php">Gestión de Ordenes de Trabajo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PQRS</a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="GestionPQRS.php">Gestión de PQRS</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="usuarioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <script>document.write(usuarioLogueado);</script>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="usuarioDropdown">
                        <li><a class="dropdown-item" href="banner.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
    <div class="container mt-4">
        <h2>Gestión de Referencias</h2>
        <form onsubmit="agregarReferencia(event)">
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" required>
            </div>
            <div class="mb-3">
                <label for="linea" class="form-label">Línea</label>
                <input type="text" class="form-control" id="linea" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <select class="form-control" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Unisex">Unisex</option>
                </select>
            </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-danger">Bloquear</button>
        </form>
        
        <h3 class="mt-4">Lista de Referencias</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Codigo Generado</th>
                    <th>Codigo Referencia</th>
                    <th>Descripcion</th>
                    <th>Fecha Creacion</th>
                    <th>Estado</th>
                    <th>Acciones</th>

                </tr>
       </thead>
     <?php 
              
                 require_once "PHP/conexion.php";
                require_once "Controlador/ReferenciasController.php";
                $sentencia= new consultas();
                $mostrardatos= $sentencia->select_referencias();
                foreach($mostrardatos as $res){
                   $cons= $res['CodGenerado'];
                     echo "<tr>";
                     echo "<td>".$res["CodGenerado"]."</td>";
                     echo "<td>".$res["CodReferencia"]."</td>";
                     echo "<td>".$res["Descripreferencia"]."</td>";
                     echo "<td>".$res["FCreacion"]."</td>";
                     echo "<td>".$res["Estado"]."</td>";
                    
                      echo "<td class='text-center'>
                        <button class='btn btn-primary btn-sm' onClick='editar($cons);'>Editar</button>           
                        <button class='btn btn-danger btn-sm' onClick='eliminar($cons);'>Eliminar</button>
                        </td>";
                        echo "</tr>";
                }
            ?>
        <tbody>
</table>


      
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

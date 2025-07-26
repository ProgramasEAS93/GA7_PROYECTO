<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema Maquila</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <script>
        // Simulación de usuario logueado
        const usuarioLogueado = "Administrador"
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d6efd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="IMG/Logo.png" alt="Logo" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

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
                            li><a class="dropdown-item" href="GestionPQRS.php">Gestión de PQRS</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="usuarioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <script>document.write(usuarioLogueado);</script>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="usuarioDropdown">
                            <li><a class="dropdown-item" href="bannet.php">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <h2>Gestión de Usuarios</h2>
        <form id="form" method="POST">
    <div class="mb-3">
        <label for="NomUsuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="NomUsuario" name="NomUsuario" required>
    </div>
    <div class="mb-3">
        <label for="NombreCompleto" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" id="NombreCompleto" name="NombreCompleto" required>
    </div>
   
    <div class="mb-3">
        <label for="Correo" class="form-label">Clave</label>
        <input type="password" class="form-control" id="Correo" name="Correo" required>
    </div>
    <div class="mb-3">
        <label for="Clave" class="form-label">Estado</label>
        <input type="text" class="form-control" id="Clave" name="Clave" required>
    </div>
    <div class="mb-3">
        <label for="ConfirmarClave" class="form-label">Fecha Creacion</label>
        <input type="date" class="form-control" id="ConfirmarClave" name="ConfirmarClave" required>
    </div>
    <!-- Campo oculto para estado -->
    <input type="hidden" id="Estado" name="Estado" value="activo">
    <!-- Campo oculto para fecha de creación -->
    <input type="hidden" id="FechaCreacion" name="FechaCreacion" value="<?php echo date('Y-m-d H:i:s'); ?>">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="button" class="btn btn-warning">Modificar</button>
    <button type="button" class="btn btn-danger">Bloquear</button>
</form>
        <h3 class="mt-4">Lista de Usuarios</h3>
        <table class="table table-bordered mt-3">
           <thead>
    <tr>
        <th>Código Usuario</th>
        <th>Nombre Usuario</th>
        <th>Nombre Completo</th>
        <th>Clave</th>
        <th>Estado</th>
        <th>Fecha Creación</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
<?php 
    require_once "PHP/conexion.php";
    require_once "Controlador/UsuariosController.php";
    $sentencia = new consultas();
    $mostrardatos = $sentencia->select_Usuarios(); // corrige mayúscula
    foreach($mostrardatos as $res){
        $cons = $res['CodUsuarios'];
        echo "<tr>";
        echo "<td>".$res["CodUsuarios"]."</td>";
        echo "<td>".$res["NomUsuario"]."</td>";
        echo "<td>".$res["NombreCompleto"]."</td>";
        echo "<td>".$res["Clave"]."</td>";
        echo "<td>".$res["Estado"]."</td>";
        echo "<td>".$res["FechaCreacion"]."</td>";
        echo "<td class='text-center'>
                <button class='btn btn-primary btn-sm' onClick='editar($cons);'>Editar</button>           
                <button class='btn btn-danger btn-sm' onClick='eliminar($cons);'>Eliminar</button>
              </td>";
        echo "</tr>";
    }
?>
</tbody>
</table>


      
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

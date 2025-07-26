<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion PQRS - Sistema Maquila</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Inicio</a> 

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="usuariosDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Usuarios</a>
                        <ul class="dropdown-menu" aria-labelledby="usuariosDropdown">
                            <li><a class="dropdown-item" href="GestionUsuario.php">Gestión de Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                        <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                            <li><a class="dropdown-item" href="GestionClientes.php">Gestión de Clientes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="referenciasDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Referencias</a>
                        <ul class="dropdown-menu" aria-labelledby="referenciasDropdown">
                            <li><a class="dropdown-item" href="GestionReferencias.php">Gestión de Referencias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Proveedores</a>
                        <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                            <li><a class="dropdown-item" href="GestionProveedores.php">Gestión de Proveedores</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Ordenes de Produccion</a>
                        <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                            <li><a class="dropdown-item" href="GestionOP.php">Gestión de Ordenes de Produccion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Ordenes de Trabajo</a>
                        <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                            <li><a class="dropdown-item" href="GestionOT.php">Gestión de Ordenes de Trabajo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="clientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PQRS</a>
                        <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                            <li><a class="dropdown-item" href="GestionPQRS.php">Gestión de PQRS</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="usuarioDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <script>
                            document.write(usuarioLogueado);
                            </script>
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
        <h2>Gestion de PQRS</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">CODIGO PQRS</label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">FECHA QRS</label>
                        <input type="date" class="form-control" id="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">DESCRIPCION</label>
                        <input type="email" class="form-control" id="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">CODIGO CLIENTE</label>
                        <input type="text" class="form-control" id="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">SOLUCION</label>
                        <input type="text" class="form-control" id="observaciones" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">FECHA SOLUCION</label>
                        <input type="date" class="form-control" id="fechaOT" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomcontaco" class="form-label">NOMBRE CONTACTO</label>
                        <input type="text" class="form-control" id="nomcontacto" required>
                    </div>
                    <div class="mb-3">
                        <label for="nrocontacto" class="form-label">NRO CONTACTO</label>
                        <input type="text" class="form-control" id="nrocontacto" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-danger">Bloquear</button>
        </form>
        <h3 class="mt-4">Lista de PQRS</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>NRO PQRS</th>
                    <th>F.QRS</th>
                    <th>Descripcion</th>
                    <th>Cod.Cliente</th>
                    <th>Solucion</th>
                    <th>F.Solucion</th>
                    <th>Contacto</th>
                    <th>NroContacto</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php 
              
                require_once "PHP/conexion.php";
                require_once "Controlador/PQRSController.php";
                $sentencia= new consultas();
                $mostrardatos= $sentencia->select_pqrs();
                foreach($mostrardatos as $res){
                   $cons= $res['CodPQR'];
                     echo "<tr>";  
                           
                     echo "<td>".$res["CodPQR"]."</td>";   
                     echo "<td>".$res["FechaPQR"]."</td>";
                     echo "<td>".$res["Descripcion"]."</td>";
                     echo "<td>".$res["CodCliente"]."</td>";
                     echo "<td>".$res["Solucion"]."</td>";
                     echo "<td>".$res["FechaSolucion"]."</td>";
                     echo "<td>".$res["NomContacto"]."</td>";
                     echo "<td>".$res["NroContacto"]."</td>";
                     
                     echo "<td>".$res["Estado"]."</td>";              
                                     
                      echo "<td class='text-center'>
                        <button class='btn btn-primary btn-sm' onClick='editar($cons);'>Editar</button>           
                        <button class='btn btn-danger btn-sm' onClick='eliminar($cons);'>Eliminar</button>
                        </td>";
                        echo "</tr>";

                }
            ?>
            <tbody>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<tbody id="tablaUsuarios">
</tbody>
</table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
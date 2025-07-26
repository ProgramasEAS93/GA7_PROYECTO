<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Proveedores - Sistema Maquila</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
        thead tr {
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>
<body>
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
                            <li><a class="dropdown-item" href="#">Gestión de Proveedores</a></li>
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
        <h2>Gestión de Proveedores</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                        <select class="form-control" id="tipoDocumento">
                            <option value="NIT">NIT</option>
                            <option value="CEDULA">CÉDULA</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="text" class="form-control" id="cedula" required>
                    </div>
                    <div class="mb-3">
                        <label for="razonSocial" class="form-label">Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" required>
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Contacto</label>
                        <input type="text" class="form-control" id="contacto" required>
                    </div>
                    <div class="mb-3">
                        <label for="numeroContacto" class="form-label">Número de Contacto</label>
                        <input type="text" class="form-control" id="numeroContacto" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
        </form>
        
        <h3 class="mt-4">Lista de Proveedores</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo Documento</th>
                    <th>Documento</th>
                    <th>Razón Social</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Contacto</th>
                    <th>Número de Contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
     <?php 
              
                require_once "PHP/conexion.php";
                require_once "Controlador/ProveedoresController.php";
                $sentencia= new consultas();
                $mostrardatos= $sentencia->select_proveedores();
                foreach($mostrardatos as $res){
                   $cons= $res['Codgenerado'];
                     echo "<tr>";
              
                     echo "<td>".$res["Codgenerado"]."</td>";
                     echo "<td>".$res["TipoDocumento"]."</td>";
                     echo "<td>".$res["Documento"]."</td>";
                     echo "<td>".$res["RazonSocial"]."</td>";
                      echo "<td>".$res["Correo"]."</td>";
                     echo "<td>".$res["Telefono"]."</td>";
                     echo "<td>".$res["Direccion"]."</td>";
                     echo "<td>".$res["Contacto"]."</td>";
                     echo "<td>".$res["NumeroContacto"]."</td>";
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

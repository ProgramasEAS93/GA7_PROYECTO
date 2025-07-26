<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestionOP - Sistema Maquila</title>
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
        <h2>Gestión de Ordenes de Producción</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="op" class="form-label">O.P</label>
                        <input type="text" class="form-control" id="op" required>
                    </div>
                    <div class="mb-3">
                        <label for="referencia" class="form-label">Referencia</label>
                        <input type="text" class="form-control" id="referencia" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaCreacion" class="form-label">F. Creación</label>
                        <input type="date" class="form-control" id="fechaCreacion" required>
                    </div>
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades</label>
                        <input type="number" class="form-control" id="unidades" required>
                    </div>
                    <div class="mb-3">
                        <label for="valorUnitario" class="form-label">Valor Unitario</label>
                        <input type="number" class="form-control" id="valorUnitario" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fechaEntrega" class="form-label">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fechaEntrega" required>
                    </div>
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="diasEntrega" class="form-label">Días/Entrega</label>
                        <input type="number" class="form-control" id="diasEntrega" required>
                    </div>
                    <div class="mb-3">
                        <label for="valorTotal" class="form-label">Valor Total</label>
                        <input type="number" class="form-control" id="valorTotal" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
        </form>

        <h3 class="mt-4">Lista de Órdenes de Producción</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>O.P</th>
                    <th>Referencia</th>
                    <th>F. Creación</th>
                    <th>Unidades</th>
                    <th>Observaciones</th>
                    <th>Valor Unitario</th>                    
                    <th>Fecha de Entrega</th>
                    <th>Cliente</th>
                    <th>Días/Entrega</th>
                    <th>Valor Total</th>
                    <th>Acciones</th>
                </tr>
                </thead>
             <?php 
              
                require_once "PHP/conexion.php";
                require_once "Controlador/OrdenesPrdController.php";
                $sentencia= new consultas();
                $mostrardatos= $sentencia->select_OrdenesOP();
                foreach($mostrardatos as $res){
                   $cons= $res['CodOP'];
                     echo "<tr>";              
                     echo "<td>".$res["CodOP"]."</td>";   
                     echo "<td>".$res["Referencia"]."</td>";
                     echo "<td>".$res["FCreacion"]."</td>";
                     echo "<td>".$res["Unidades"]."</td>";
                     echo "<td>".$res["Observaciones"]."</td>";
                     echo "<td>".$res["ValorUnitario"]."</td>"; 
                     echo "<td>".$res["FEntrega"]."</td>";  
                    
                     echo "<td>".$res["CodCliente"]."</td>";  
                     echo "<td>".$res["DiasEntrega"]."</td>";  
                     echo "<td>".$res["ValorTotal"]."</td>";                     
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
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
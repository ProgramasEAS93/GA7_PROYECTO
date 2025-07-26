<?php
require_once "../php/conexion.php";
require_once "../controlador/usuariosController.php";

if (!isset($_POST['tipo_operacion'])) {
    echo json_encode(['error' => 'Operación no definida']);
    exit;
}

$consultas = new consultas();

switch ($_POST['tipo_operacion']) {
    case 'guardar':
        $CodUsuarios = $_POST['CodUsuarios'];
        $NomUsuario = $_POST['NomUsuario'];
        $NombreCompleto = $_POST['NombreCompleto'];
        $Clave = $_POST['Clave'];
        $Estado = $_POST['Estado'];
        $FechaCreacion = $_POST['FechaCreacion'];

        $resultado = $consultas->insertar_Usuarios($CodUsuarios, $NomUsuario, $NombreCompleto, $Clave, $Estado, $FechaCreacion);
        echo json_encode($resultado);
        break;

    case 'editar':
        $NomUsuario = $_POST['NomUsuario'];
        $resultado = $consultas->consultar_Usuarios($NomUsuario);
        echo json_encode($resultado);
        break;

    case 'update':
        $CodUsuarios = $_POST['CodUsuarios'];
        $NomUsuario = $_POST['NomUsuario'];
        $NombreCompleto = $_POST['NombreCompleto'];
        $Clave = $_POST['Clave'];
        $Estado = $_POST['Estado'];
        $FechaCreacion = $_POST['FechaCreacion'];

        $resultado = $consultas->Actualizar_Usuarios($CodUsuarios, $NomUsuario, $NombreCompleto, $Clave, $Estado, $FechaCreacion);
        echo json_encode($resultado);
        break;

    case 'eliminar':
        $CodUsuarios = $_POST['CodUsuarios'];
        $resultado = $consultas->Eliminar_Usuarios($CodUsuarios);
        echo json_encode($resultado);
        break;

    default:
        echo json_encode(['error' => 'Operación no válida']);
        break;
}
?>
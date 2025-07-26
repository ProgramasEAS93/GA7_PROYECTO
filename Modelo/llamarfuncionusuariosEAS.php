<?php
    require_once "../php/conexion.php";
    require_once "../controlador/usuariosController.php";


     $tipo_consulta = $_POST['tipo_operacion']; 
     switch($tipo_consulta){
        case 'guardar':
                $CodUsuarios = $_POST['CodUsuarios'];
                $NomUsuario = $_POST['NomUsuario'];
                $NombreCompleto = $_POST['NombreCompleto'];
                $Clave = $_POST['Clave'];
                $Estado = $_POST['Estado'];
                $FechaCreacion = $_POST['FechaCreacion'];
                
                $consultas = new consultas();
                $ejecutar = $consultas->insertar_Usuarios($codusuarios,$nomusuario,$nombrecompleto,$clave,$estado,$FechaCreacion);
                echo json_encode($ejecutar); 
            break;
            case 'editar':     
                $cons = $_POST['codusuarios'];                
                $consultas = new consultas();
                $ejecutar = $consultas->consultar_Usuarios($codusuarios);
                echo json_encode($ejecutar);
            break;
            case 'update':
                $CodUsuarios = $_POST['CodUsuarios'];
                $NomUsuario = $_POST['NomUsuario'];
                $NombreCompleto = $_POST['NombreCompleto'];
                $Clave = $_POST['Clave'];
                $Estado = $_POST['Estado'];
                $FechaCreacion = $_POST['FechaCreacion'];
        
                $consultas = new consultas();
                $ejecutar = $consultas->Actualizar_Usuarios($codusuarios,$nomusuario,$nombrecompleto,$clave,$estado,$FechaCreacion);
                echo json_encode($ejecutar);
            break;
            case 'eliminar':
                $cons=$_POST['CodUsuarios'];
                $consultas = new consultas();
                $ejecutar = $consultas -> eliminar_paciente($CodUsuarios);
                echo json_encode($ejecutar);
            break;
            default:
        break;


     }

?>
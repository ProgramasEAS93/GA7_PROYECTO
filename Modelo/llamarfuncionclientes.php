<?php
    require_once "../php/conexion.php";
    require_once "../controlador/clientesController.php";


     $tipo_consulta = $_POST['tipo_operacion']; 
     switch($tipo_consulta){
        case 'guardar':
                $codcliente= $_POST['codcliente'];
                $nit = $_POST['nit'];
                $nombrecomercial = $_POST['nombrecomercial'];
                $fechacreacion = $_POST['fechacreacion'];
                $estado = $_POST['estado'];
            
                
                $consultas = new consultas();
                $ejecutar = $consultas->insert_cliente($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado);
                echo json_encode($ejecutar); 
            break;
            case 'editar':     
                $cons = $_POST['cons'];                
                $consultas = new consultas();
                $ejecutar = $consultas->obtener_cliente($codcliente);
                echo json_encode($ejecutar);
            break;
            case 'update':
                $codcliente = $_POST['codcliente'];
                $nit = $_POST['nit'];
                $nombrecomercial = $_POST['nombrecomercial'];
                $fechacreacion = $_POST['fechacreacion'];
                $estado = $_POST['estado'];
             
                $consultas = new consultas();
                $ejecutar = $consultas->update_cliente($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado);
                echo json_encode($ejecutar);
            break;
            case 'eliminar':
                $cons=$_POST['cons'];
                $consultas = new consultas();
                $ejecutar = $consultas -> eliminar_cliente($codcliente);
                echo json_encode($ejecutar);
            break;
            default:
        break;


     }

?>
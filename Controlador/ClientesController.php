<?php

    class consultas  extends dbconexion{
        public function select_paciente(){
            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodCliente,Nit,NombreComercial,FechaCreacion,Estado FROM tblclientes order by  CodCliente desc");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_cliente2222($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO tblclientes(codcliente,nit,nombrecomercial,fechacreacion,estado) VALUES ($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado)");
            IF($sqlp->execute()){
                $resultado= self::select_paciente();
                return $resultado;
            }

        }

    public function insert_cliente($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado ){
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO tblclientes (codcliente,nit,nombrecomercial,fechacreacion,estado)
            VALUES (:codcliente, :nit, :nobmbrecomercial, :fechacreacion, :estado)"
    );

    $sqlp->bindParam(':codicliente', $codcliente);
    $sqlp->bindParam(':documento', $nit);
    $sqlp->bindParam(':fecha', $nombrecomercial);
    $sqlp->bindParam(':nombre', $fechacreacion);
    $sqlp->bindParam(':apellido', $estado);


    if ($sqlp->execute()) {
        return self::select_clientes(); // Retorna todos los clientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}

        public function obtener_cliente($cons){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  tblclientes WHERE codcliente='".$codcliente."'");
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        public function update_cliente($codcliente,$nit,$nombrecomercial,$fechacreacion,$estado){
            $sqlp= dbconexion::conexion()->prepare("UPDATE tblclientes SET nit='".$nit."',nombrecomercial='".$nombrecomercial."',fechacreacion=='".$fechacreacion."',estado='".$estado."' WHERE  codcliente='".$codcliente."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_cliente();
                return $resultado;
            }else{
                return "error";
            }
        }

        public function eliminar_cliente($codcliente){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM tblclientes WHERE  codcliente='".$codcliente."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_cliente();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
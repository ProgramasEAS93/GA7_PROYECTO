<?php

    class consultas  extends dbconexion{
        public function select_OrdenesOT(){
            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodOT,CodOP,CodMaquila,CantidadOT,ValorOT,FechaOT,FEspera,EntregadoX,RecibidoX,Estado FROM tblOrdenesTrabajo order by CodOT desc");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_OrdeneOT2222($CodOP,$CodMaquila,$CantidadOT,$ValorOT,$FechaOT,$FEspera,$EntregadoX,$RecibidoX,$Estado){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO tblordenestrabajo(CodOP,CodMaquila,CantidadOT,ValorOT,FechaOT,FEspera,EntregadoX,RecibidoX,Estado) VALUES ($CodOP,$CodMaquila,$CantidadOT,$ValorOT,$FechaOT,$FEspera,$EntregadoX,$RecibidoX,$Estado)");
            IF($sqlp->execute()){
                $resultado= self::select_paciente();
                return $resultado;
            }

        }

    public function insert_OrdenesOT($CodOP,$CodMaquila,$CantidadOT,$ValorOT,$FechaOT,$FEspera,$EntregadoX,$RecibidoX,$Estado) {
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO paciente (CodOP,CodMaquila,CantidadOT,ValorOT,FechaOT,FEspera,EntregadoX,RecibidoX,Estado)
            VALUES (:CodOP,:CodMaquila,:CantidadOT,:ValorOT,:FechaOT,:FEspera,:EntregadoX,:RecibidoX, :Estado)"
    );
    $sqlp->bindParam(':CodOP', $CodOP);
    $sqlp->bindParam(':CodMaquila', $CodMaquila);
    $sqlp->bindParam(':CantidadOT', $CantidadOT);
    $sqlp->bindParam(':ValorOT', $ValorOT);
    $sqlp->bindParam(':FechaOT', $FechaOT);
    $sqlp->bindParam(':FEspera', $FEspera);
    $sqlp->bindParam(':EntregadoX', $EntregadoX);
    $sqlp->bindParam(':RecibidoX', $RecibidoX);
    $sqlp->bindParam(':Estado', $Estado);

    if ($sqlp->execute()) {
        return self::select_OrdenesOT(); // Retorna todos los pacientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}

        public function obtener_OrdenesOT($CodOT){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  tblordenestrabajo WHERE CodOT='".$CodOT."'" );
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        public function update_OrdenesOT($CodOP,$CodMaquila,$CantidadOT,$ValorOT,$FechaOT,$FEspera,$EntregadoX,$RecibidoX,$Estado){
            $sqlp= dbconexion::conexion()->prepare("UPDATE TblOrdenesTrabajo SET CodOP='".$CodOP."',CodMaquila='".$CodMaquila."',CantidadOT=='".$CantidadOT."',ValorOT='".$ValorOT."',FechaOT='".$FechaOT."',FEspera='".$FEspera."'  ,EntregadoX='".$EntregadoX."' ,RecibidoX='".$RecibidoX."', Estado='".$Estado."'     WHERE CodOT='".$CodOT."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_OrdenesOT();
                return $resultado;
            }else{
                return "error";
            }
        }

        public function eliminar_OrdenesOT($CodOT){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM Tblordenestrabajo WHERE  CodOT='".$CodOT."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_OrdenesOT();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
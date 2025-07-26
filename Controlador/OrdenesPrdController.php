<?php

    class consultas  extends dbconexion{
        public function select_OrdenesOP(){
            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodOP,Referencia,FCreacion,Unidades,Observaciones,FEntrega,ValorUnitario,CodCliente,DiasEntrega,ValorTotal	 FROM tblop");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_OrdenesOP2222($Referencia,$FCreacion,$Unidades,$Observaciones,$FEntrega,$ValorUnitario,$CodCliente,$DiasEntrega,$ValorTotal){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO tblop (Referencia,FCreacion,Unidades,Observaciones,FEntrega,ValorUnitario,CodCliente,DiasEntrega,ValorTotal) VALUES ($Referencia,$FCreacion,$Unidades,$Observaciones,$FEntrega,$ValorUnitario,$CodCliente,$DiasEntrega,$ValorTotal)");
            IF($sqlp->execute()){
                $resultado= self::select_OrdenesOP();
                return $resultado;
            }

        }

    public function insert_OrdenesOP($Referencia,$FCreacion,$Unidades,$Observaciones,$FEntrega,$ValorUnitario,$CodCliente,$DiasEntrega,$ValorTotal) {
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO tblop (Referencia,FCreacion,Unidades,Observaciones,FEntrega,ValorUnitario,CodCliente,DiasEntrega,ValorTotal)
            VALUES (:Referencia,:FCreacion,:Unidades,:Observaciones,:FEntrega,:ValorUnitario,:CodCliente,:DiasEntrega,:ValorTotal)"
    );

    $sqlp->bindParam(':Referencia', $Referencia);
    $sqlp->bindParam(':FCreacion', $FCreacion);
    $sqlp->bindParam(':Unidades', $Unidades);
    $sqlp->bindParam(':Observaciones', $Observaciones);
    $sqlp->bindParam(':FEntrega', $FEntrega);
    $sqlp->bindParam(':ValorUnitario', $ValorUnitario);
    $sqlp->bindParam(':CodCliente', $CodCliente);
    $sqlp->bindParam(':DiasEntrega', $DiasEntrega);
    $sqlp->bindParam(':ValorTotal', $ValorTotal);

    if ($sqlp->execute()) {
        return self::select_OrdenesOP(); // Retorna todos los pacientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}

        public function obtener_OrdenesOP($codop){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  tblop WHERE codopop='".$codop."'");
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        public function update_OrdenesOP($Codop,$Referencia,$FCreacion,$Unidades,$Observaciones,$FEntrega,$ValorUnitario,$CodCliente,$DiasEntrega,$ValorTotal){
            $sqlp= dbconexion::conexion()->prepare("UPDATE tblop SET Referencia='".$Referencia."',FCreacion='".$FCreacion."',Unidades=='".$Unidades."',Observaciones='".$Observaciones."',FEntrega='".$FEntrega."',ValorUnitario='".$ValorUnitario."'
            ,CodCliente='".$CodCliente."',DiasEntrega='".$ValorTotal."',va='".$ValorTotal."'  WHERE conse='".$Codop."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_OrdenesOP();
                return $resultado;
            }else{
                return "error";
            }
        }

        public function eliminar_OrdenesOP($Codop){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM tblop WHERE  codop='".$Codop."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_OrdenesOP();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
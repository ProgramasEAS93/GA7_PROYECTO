<?php

    class consultas  extends dbconexion{

        public function select_referencias(){            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodGenerado,CodReferencia,Descripreferencia,FCreacion,Estado FROM tblreferencias order by  CodGenerado desc");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_referencias2222($codreferencia,$Descripreferencia,$FCreacion,$estado){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO tblreferencias (CodReferencia,Descripreferencia,FCreacion,Estado) VALUES ($codreferencia,$Descripreferencia,$FCreacion,$estado)");
            IF($sqlp->execute()){
                $resultado= self::select_paciente();
                return $resultado;
            }

        }

    public function insert_referencias($codreferencia,$Descripreferencia,$FCreacion,$estado){
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO tblclientes (CodReferencia,Descripreferencia,FCreacion,Estado)
            VALUES (:CodReferencia, :Descripreferencia, :Descripreferencia, :FCreacion, :Estado)"
    );

    $sqlp->bindParam(':CodReferencia', $codreferencia);
    $sqlp->bindParam(':Descripreferencia', $Descripreferencia);
    $sqlp->bindParam(':FCreacion', $FCreacion);
    $sqlp->bindParam(':apellido', $estado);


    if ($sqlp->execute()) {
        return self::select_referencias(); // Retorna todos los clientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}

        public function obtener_referencias($CodReferencia){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  tblreferencias WHERE CodReferencia='".$CodReferencia."'");
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        public function update_cliente($CodGenerado,$codreferencia,$Descripreferencia,$FCreacion,$estado){
            $sqlp= dbconexion::conexion()->prepare("UPDATE tblreferencias SET codreferencia='".$codreferencia."',Descripreferencia='".$Descripreferencia."',FCreacion=='".$FCreacion."',estado='".$estado."' WHERE  CodGenerado='".$CodGenerado."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_cliente();
                return $resultado;
            }else{
                return "error";
            }
        }

        public function eliminar_referencias($CodGenerado){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM tblreferencias WHERE  CodGenerado='".$CodGenerado."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_referencias();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
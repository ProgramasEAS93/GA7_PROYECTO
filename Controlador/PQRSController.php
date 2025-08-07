<?php
    class consultas  extends dbconexion{

        public function select_pqrs(){
            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodPQR,FechaPQR,Descripcion,CodCliente,Solucion,FechaSolucion,NomContacto,NroContacto,Estado  FROM tblpqrs order by  CodPQR  Desc ");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }
        public function insertar_pqrs($FechaPQR,$Descripcion,$CodCliente,$Solucion,$FechaSolucion,$NomContacto,$Estado){
        $sqlp = dbconexion::conexion()->prepare("INSERT INTO tblpqrs(FechaPQR,Descripcion,CodCliente,Solucion,FechaSolucion,NroContacto,Estado )
                VALUES ($FechaPQR,$Descripcion,$CodCliente,$Solucion,$FechaSolucion,$NomContacto,$NroContacto,$Estado)");

        if($sqlp->execute()){
            $resultado=self::select_pqrs();
            return $resultado;
        }
    }

    public function consultar_pqrs($CodPQR){
        $sql=dbconexion::conexion()->prepare("SELECT  * FROM  tblpqrs WHERE nomusuario='".$CodPQR."'");
        if($sqlp->execute()){
            return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return "Error";
        }
    }

    public function Actualizar_pqrs($CodPQR,$FechaPQR,$Descripcion,$CodCliente,$Solucion,$FechaSolucion,$NomContacto,$Estado){
        $sqlp=dbconexion::conexion()->prepare("UPDATE tblpqrs SET FechaPQR='".$FechaPQR."',Descripcion='".$Descripcion."',CodCliente='".$CodCliente."',Solucion='".$Solucion."' , FechaSolucion='".$FechaSolucion."' ,NomContacto='".$NomContacto."' , Estado='".$Estado."' 
         WHERE CodPQR='".$CodPQR."'");
          if($sqlp->rowCount()>0){
                $resultado= self::select_pqrs();
                return $resultado;
            }else{
                return "error";
            }

        }

    public function Eliminar_pqrs($CodPQR){
        $sqlq=dbconexion::conexion()->prepare("DELETE FROM tblpqrs WHERE codusuario='".$CodPQR."'");
        $sqlp->execute();
        if($sqlp->rowCount()>0){
            $resultado=self::select_pqrs();
            return $resultado;
        }else{
            return "Error";
        }
    }



}
    
?>
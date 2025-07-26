<?php
    class consultas  extends dbconexion{
 
        public function select_Usuarios(){
            
        $sqlp = dbconexion::conexion()->prepare("SELECT CodUsuarios,NomUsuario,NombreCompleto,Clave, Estado,FechaCreacion FROM tblusuarios order by  CodUsuarios Desc ");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

      public function insertar_Usuarios($codusuarios,$nomusuario,$nombrecompleto,$clave,$estado,$FechaCreacion){
        $sqlp = dbconexion::conexion()->prepare("INSERT INTO tblusuarios(nomusuario,nombrecompleto,clave,estado,fechacreacion)
                VALUES ($codusuarios,$nomusuario,$nombrecompleto,$clave,$estado,$FechaCreacion)");

        if($sqlp->execute()){
            $resultado=self::select_clientes();
            return $resultado;
        }
    }

    public function consultar_Usuarios($nomusuario){
        $sql=dbconexion::conexion()->prepare("SELECT  * FROM  tblusuarios WHERE nomusuario='".$nomusuario."'");
        if($sqlp->execute()){
            return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return "Error";
        }
    }

    public function Actualizar_Usuarios($codusuarios,$nomusuario,$nombrecompleto,$clave,$estado,$FechaCreacion){
        $sqlp=dbconexion::conexion()->prepare("UPDATE tblusuarios SET nomusuario='".$nomusuario."',nombrecompleto='".$nombrecompleto."',clave='".$clave."',estado='".$Estado."' 
        WHERE codusuarios='".$codusuarios."'");
          if($sqlp->rowCount()>0){
                $resultado= self::select_clientes();
                return $resultado;
            }else{
                return "error";
            }

        }

    public function Eliminar_Usuarios($codusuarios){
        $sqlq=dbconexion::conexion()->prepare("DELETE FROM tblusuarios WHERE codusuario='".$codusuarios."'");
        $sqlp->execute();
        if($sqlp->rowCount()>0){
            $resultado=self::select_clientes();
            return $resultado;
        }else{
            return "Error";
        }
    }



}
    
?>
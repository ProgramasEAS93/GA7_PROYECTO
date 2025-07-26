<?php

    class consultas  extends dbconexion{

        public function select_proveedores(){            
        $sqlp = dbconexion::conexion()->prepare("SELECT Codgenerado,TipoDocumento,Documento,RazonSocial,Correo,Telefono,Direccion,Contacto,NumeroContacto FROM tblproveedores order by  CodGenerado desc");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_proveedores($Codgenerado,$TipoDocumento,$Documento,$RazonSocial,$Correo,$Telefono,$Direccion,$Contacto,$NumeroContacto){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO tblreferencias (TipoDocumento,Documento,RazonSocial,Correo,Telefono,Direccion,Contacto,NumeroContacto) VALUES ($TipoDocumento,$Documento,$RazonSocial,$Correo,$Telefono,$Direccion,$Contacto,$NumeroContacto)");
            IF($sqlp->execute()){
                $resultado= self::select_proveedores();
                return $resultado;
            }

        }

    public function insert_proveedores99($Codgenerado,$TipoDocumento,$Documento,$RazonSocial,$Correo,$Telefono,$Direccion,$Contacto,$NumeroContacto){
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO tblclientes (Codgenerado,TipoDocumento,Documento,RazonSocial,Correo,Telefono,Direccion,Contacto,NumeroContacto)
            VALUES (:Codgenerado, :TipoDocumento, :TipoDocumento, :Documento, :RazonSocial,:Correo,:Telefono,:Direccion,:Contacto,:NumeroContacto)"
    );

        $sqlp->bindParam(':Codgenerado', $Codgenerado);
        $sqlp->bindParam(':TipoDocumento', $TipoDocumento);
        $sqlp->bindParam(':Documento', $Documento);
        $sqlp->bindParam(':RazonSocial', $RazonSocial);
        $sqlp->bindParam(':Correo', $Correo);
        $sqlp->bindParam(':Telefono', $Telefono);
        $sqlp->bindParam(':Direccion', $Direccion);
        $sqlp->bindParam(':Contacto', $Contacto);
        $sqlp->bindParam(':NumeroContacto', $NumeroContacto);


    if ($sqlp->execute()) {
        return self::select_proveedores(); // Retorna todos los clientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}

        public function obtener_proveedores($CodReferencia){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  tblproveedores WHERE Codgenerado='".$Codgenerado."'");
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        public function update_proveedores($Codgenerado,$TipoDocumento,$Documento,$RazonSocial,$Correo,$Telefono,$Direccion,$Contacto,$NumeroContacto){
            $sqlp= dbconexion::conexion()->prepare("UPDATE tblproveedores SET TipoDocumento='".$TipoDocumento."',Documento='".$Documento."',RazonSocial=='".$RazonSocial."',Telefono='".$Telefono."',Direccion='".$Direccion."' ,Contacto='".$Contacto."' ,NumeroContacto='".$NumeroContacto."'  WHERE  CodGenerado='".$CodGenerado."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_proveedores();
                return $resultado;
            }else{
                return "error";
            }
        }

        public function eliminar_proveedores($CodGenerado){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM tblproveedores WHERE  CodGenerado='".$CodGenerado."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_proveedores();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
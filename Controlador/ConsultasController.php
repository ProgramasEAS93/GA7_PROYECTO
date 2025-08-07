<?php


/**
 * Clase: consultas
 * Descripción: Contiene métodos para realizar operaciones CRUD sobre la tabla 'paciente'.
 */

    class consultas  extends dbconexion{
        public function select_paciente(){
        //Recupera todos los registros de pacientes.    
        $sqlp = dbconexion::conexion()->prepare("SELECT consecutivo,tipo_doc,documento,fecha,nombre,apellido,sexo FROM paciente");
        $sqlp->execute();
        $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    
        }

        public function insert_paciente2222($tipo_doc,$documento,$fecha,$nombre,$apellido,$sexo){
            $sqlp= dbconexion::conexion()->prepare("INSERT INTO paciente(tipo_doc,fecha,nombre,apellidos,sexo) VALUES ($tipo_doc,$documento,$fecha,$nombre,$apellido,$sexo)");
            IF($sqlp->execute()){
                $resultado= self::select_paciente();
                return $resultado;
            }

        }

    public function insert_paciente($tipo_doc, $documento, $fecha, $nombre, $apellido, $sexo) {
        $sqlp = DbConexion::conexion()->prepare(
            "INSERT INTO paciente (tipo_doc, documento, fecha, nombre, apellido, sexo)
            VALUES (:tipo_doc, :documento, :fecha, :nombre, :apellido, :sexo)"
    );
    //Inserta un nuevo paciente en la base de datos.
    $sqlp->bindParam(':tipo_doc', $tipo_doc);
    $sqlp->bindParam(':documento', $documento);
    $sqlp->bindParam(':fecha', $fecha);
    $sqlp->bindParam(':nombre', $nombre);
    $sqlp->bindParam(':apellido', $apellido);
    $sqlp->bindParam(':sexo', $sexo);

    if ($sqlp->execute()) {
        return self::select_paciente(); // Retorna todos los pacientes si se insertó correctamente
    } else {
        return false; // Puedes manejar el error más específicamente si lo deseas
    }
}
           /**
     * Recupera los datos de un paciente específico por su consecutivo.
     * @param int $cons Consecutivo del paciente.
     * @return mixed Arreglo de datos o 'error' si falla.
     */

        public function obtener_paciente($cons){
            $sqlp=dbconexion::conexion()->prepare("SELECT * FROM  paciente WHERE Consecutivo='".$cons."'");
            if($sqlp -> execute()){
                return $array=$sqlp->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return "error";

            }
        }

        //Actualiza los datos de un paciente.
        public function update_paciente($cons,$tipo,$doc,$fec,$nom,$ape,$sexo){
            $sqlp= dbconexion::conexion()->prepare("UPDATE paciente SET tipo_doc='".$tipo."',documento='".$doc."',fecha=='".$fec."',nombre='".$nom."',apellidos='".$ape."',sexo='".$sexo."' WHERE conse='".$cons."'");
            $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_paciente();
                return $resultado;
            }else{
                return "error";
            }
        }
            // Elimina un paciente por su consecutivo.
        public function eliminar_paciente($cons){
            $sqlp= dbconexion::conexion()->prepare("DELETE FROM paciente WHERE  consecutivo='".$cons."'");
             $sqlp->execute();
            if($sqlp->rowCount()>0){
                $resultado= self::select_paciente();
                return $resultado;
            }else{
                return "error";
            }
        }
    }

    
?>
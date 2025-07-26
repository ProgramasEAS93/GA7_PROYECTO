<?php
class consultas extends dbconexion {

    public function select_Usuarios() {
        $sqlp = dbconexion::conexion()->prepare("SELECT CodUsuarios, NomUsuario, NombreCompleto, Clave, Estado, FechaCreacion FROM tblusuarios ORDER BY CodUsuarios DESC");
        $sqlp->execute();
        return $sqlp->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar_Usuarios($codusuarios, $nomusuario, $nombrecompleto, $clave, $estado, $FechaCreacion) {
        $sqlp = dbconexion::conexion()->prepare("
            INSERT INTO tblusuarios (CodUsuarios, NomUsuario, NombreCompleto, Clave, Estado, FechaCreacion)
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        if ($sqlp->execute([$codusuarios, $nomusuario, $nombrecompleto, $clave, $estado, $FechaCreacion])) {
            return $this->select_Usuarios();  // antes usabas select_clientes (inexistente)
        } else {
            return "Error al insertar";
        }
    }

    public function consultar_Usuarios($nomusuario) {
        $sql = dbconexion::conexion()->prepare("SELECT * FROM tblusuarios WHERE NomUsuario = ?");
        if ($sql->execute([$nomusuario])) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return "Error";
        }
    }

    public function Actualizar_Usuarios($codusuarios, $nomusuario, $nombrecompleto, $clave, $estado, $FechaCreacion) {
        $sqlp = dbconexion::conexion()->prepare("
            UPDATE tblusuarios 
            SET NomUsuario = ?, NombreCompleto = ?, Clave = ?, Estado = ?, FechaCreacion = ?
            WHERE CodUsuarios = ?
        ");
        if ($sqlp->execute([$nomusuario, $nombrecompleto, $clave, $estado, $FechaCreacion, $codusuarios])) {
            return $this->select_Usuarios();
        } else {
            return "Error al actualizar";
        }
    }

    public function Eliminar_Usuarios($codusuarios) {
        $sqlq = dbconexion::conexion()->prepare("DELETE FROM tblusuarios WHERE CodUsuarios = ?");
        if ($sqlq->execute([$codusuarios])) {
            return $this->select_Usuarios();
        } else {
            return "Error al eliminar";
        }
    }
}
?>
<?php
    const SERVER="localhost";
    const DB="centro_medico";
    const USER="root";
    const PASS="";
    const UTF8="utf8";

    const SGBD="mysql:host=".SERVER.";dbname=".DB.";charset=".UTF8;

    class dbconexion{
        private $con = null;

        public function conexion()
        {
            $con= new PDO(SGBD,USER,PASS);
            return $con;
        }
        public function closeDatabase()
        {
            if($this->con != null){
                $this->con === null;
            }

        }
    }
?>

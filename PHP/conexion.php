<?php

class DbConexion {
    private static $host = 'localhost';
    private static $dbname = 'maquila'; // <-- Aquí va tu base de datos
    private static $user = 'root';
    private static $pass = '';
    private static $conn;

    public static function conexion() {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$pass);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
    public function closeDatabase(){
        if($this->con != null){
            $this->con === null;
        }
    }
}


?>
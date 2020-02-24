<?php

class Conexion {
   
    const server="localhost";
    const user="root";
    const pass="";
    const database="holas";
    private $cn=null;
    
    public function getConexionBD(){
        try {
            $conexion = mysqli_connect(self::server, self::user, self::pass, self::database);
            $this->cn = $conexion;
        } catch (mysqli_sql_exception $ex) {
            $error=$ex->getMessage();
            $_SESSION['errorCon']=$error;
        }
        return $this->cn;
    }
    
}

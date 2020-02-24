<?php

class ConexionBD {

    const server = "localhost";
    const user = "root";
    const pass = "";
    const database = "hola";

    private $cn = null;
    public function getConexionBD() {
        try {
            $conexion = new mysqli(self::server, self::user, self::pass, self::database);
            $this->cn = $conexion;
        } catch (mysqli_sql_exception $ex) {
            throw $ex;
        }
        return $this->cn;
    }

}

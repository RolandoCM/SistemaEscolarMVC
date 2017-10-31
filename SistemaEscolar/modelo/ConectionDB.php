<?php
/*
 * Clase para hacer una conexión a la base de datos
 * para reurilizarla en todos los modulos que utilicen acceso a los
 * datos almacenados*/
class Connection 
{
    public static function conection()
    {
        $conection = new mysqli("localhost", "root", "martinez", "mydb");
        if(!$conection)
        {
            echo "no";
            echo "Error: No es posible conectar a MySQL." . PHP_EOL . "<br>";
            echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL . "<br>";
            echo "error de depuracion: " . mysqli_connect_error() . PHP_EOL . "<br>";
        }
        else {
            $conection->query("SET NAMES 'utf8'");
            return $conection;
        }
    }
}
?>
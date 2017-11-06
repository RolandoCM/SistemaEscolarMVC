<?php
class AlumnosModelo 
{
    private $database;
    private $alumnos;
    
    public function __construct()
    {
        require_once 'modelo/ConectionDB.php';
        $this->database = ConectionDB::conection();
        $this->alumnos = array();
    }
    public function getAlumnos()
    {
        if($sql = $this->database->query("SELECT * FROM Alumnos"))
        {
            echo "datos cargados";
            while ($filas=$sql->fetch_assoc())
            {
                $this->alumnos[] = $filas;
            }
        }
        else {
            echo "No se cargaron los datos";
        }
        return $this->alumnos;
    }
}
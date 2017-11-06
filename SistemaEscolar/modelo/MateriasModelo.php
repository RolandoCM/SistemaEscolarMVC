<?php
class MateriasModelo
{
    private $database;
    private $materias;
    
    public function __construct()
    {
        require_once 'modelo/ConectionDB.php';
        $this->database = ConectionDB::conection();
        $this->materias = array();
        
    }
    public function getListarMaterias()
    {
        $sql = $this->database->query("SELECT * FROM Materias");
        if ($sql!=null)
        {
            while ($fila=$sql->fetch_assoc())
            {
                $this->materias[] = $fila;
            }
        }
        else {
            echo "No se cargaron los datos";
            
        }
        return $this->materias;
    }
}
?>
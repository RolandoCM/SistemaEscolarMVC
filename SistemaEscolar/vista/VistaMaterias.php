<?php
class VistaMaterias
{
    public function __construct()
    {
        
    }
    /*metodo para listar las todas las materias*/
    public function listarMaterias($datos)
    {
        foreach ($datos as $registro)
        {
            echo $registro['nombre_materia'];
        }
    }
}
?>

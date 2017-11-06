<?php
class AlumnosVista
{
    public function listarAlumnos($datos)
    {
        foreach ($datos as $registro)
        {
            echo "<th><td>" . $registro["nombre"] . "</td></tr>";
        }
        echo "<a href=''>Agregar alumno </a>";
    }
}
?>
<?php 

class AlumnosControlador 
{

    public function __construct()
    {
        //carga el archivo de modelo
        require_once 'modelo/AlumnosModelo.php';
        //carga la vista
        require_once 'vista/AlumnosVista.php';
    }
    public function listarAlumnosControlador()
    {

        $alumnos= new AlumnosModelo();
        $datos = $alumnos->getAlumnos();

        $vistaAlumnos = new AlumnosVista();
        $vistaAlumnos->listarAlumnos($datos);
    }
}
?>
<?php
class MateriasControlador
{
    public function __construct()
    {
        require_once 'modelo/MateriasModelo.php';
        require_once 'vista/VistaMaterias.php';
    }
    public function listarMaterias()
    {
        $materias = new MateriasModelo();
        $datos = $materias->getListarMaterias();

        $vistaMaterias = new VistaMaterias();
        $vistaMaterias->listarMaterias($datos);
    }
}
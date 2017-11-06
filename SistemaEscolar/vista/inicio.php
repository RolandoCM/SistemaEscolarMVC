<html>
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>

</head>
<body>
	<h1>Sistema de alumnos en MVC</h1>
	<?php 
	   require_once 'vista/VistaAlumnos.php';
	?>
	
	<br><br>
	<?php 
        require_once 'controlador/MateriasControlador.php';
        $materiasControlador = new MateriasControlador();
        $materiasControlador->listarMaterias();
	?>

</body>
</html>
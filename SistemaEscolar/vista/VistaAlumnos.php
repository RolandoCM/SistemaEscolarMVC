<html>
<head>

</head>
<body>
<table>
<thead>
	<th>Nombre</th>
</thead>
	<tbody>
        <?php 
            require_once('controlador/AlumnosControlador.php');
            $alumnosControlador = new AlumnosControlador();
            $alumnosControlador->listarAlumnosControlador();
        ?>
	</tbody>


</table>
</body>
</html>
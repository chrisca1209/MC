<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'colibri') or die('Ocurrio un error al conectar a la BD');
    mysqli_query($conexion, "SET NAMES 'utf8'");
?>
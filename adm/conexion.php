<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'mc') or die('Ocurrio un error al conectar a la BD');
    mysqli_query($conexion, "SET NAMES 'utf8'");
?>
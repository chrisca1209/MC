<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'mcv2') or die('Ocurrio un error al conectar a la BD');
    mysqli_query($conexion, "SET NAMES 'utf8'");
?>
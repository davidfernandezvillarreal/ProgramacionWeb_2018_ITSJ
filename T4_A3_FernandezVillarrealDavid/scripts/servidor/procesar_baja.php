<?php
    session_start();
    include("conexion_PDO.php");
    $conexionPDO = conexionPDO("root", "", "escuela");
    
    $nc = $_GET["nc"];
	$consulta = "DELETE FROM alumnos WHERE num_control = ?";

    $sentencia = $conexionPDO->prepare($consulta);
    $sentencia->execute([$nc]);
    header("Location: ../../vista/paginas/inicio.html#/eliminar");
	$sentencia = null;
?>
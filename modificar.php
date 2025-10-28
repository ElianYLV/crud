<?php
include 'bd.php';
$conexion = conectar();
$id = $_POST['num_pokedex'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$descripcion = $_POST['descripcion'];
$query = "UPDATE pokemon SET nombre=$1, especie=$2, altura=$3, peso=$4, descripcion=$5 WHERE num_pokedex=$6";
pg_prepare($conexion, "modificar", $query);
pg_execute($conexion, "modificar", [$nombre, $especie, $altura, $peso, $descripcion, $id]);
pg_close($conexion);
header("Location: pokedex1.php");
exit;
?>
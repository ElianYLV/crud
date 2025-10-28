<?php
include 'bd.php';
$conexion = conectar();

$id = $_POST['num_pokedex'];

$query = "DELETE FROM pokemon WHERE num_pokedex=$1";
pg_prepare($conexion, "eliminar", $query);
pg_execute($conexion, "eliminar", [$id]);

pg_close($conexion);

header("Location: pokedex1.php");
exit;
?>
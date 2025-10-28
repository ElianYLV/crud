<?php
include('bd.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $especie = $_POST['especie'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $descripcion = $_POST['descripcion'];

    $conn = conectar();
    $query = "INSERT INTO pokemon (nombre, especie, altura, peso, descripcion) VALUES ($1, $2, $3, $4, $5)";
    $stmt = pg_prepare($conn, "insertar_poke", $query);
    $exec = pg_execute($conn, "insertar_poke", [$nombre, $especie, $altura, $peso, $descripcion]);

    header("Location: pokedex1.html");
    exit;

    pg_close($conn);
}
?>
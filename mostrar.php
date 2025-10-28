<tbody id="tablaPokemon">
<?php
include 'bd.php'; 

$conexion = conectar();
$query = "SELECT * FROM pokedex ORDER BY num_pokedex ASC";
$result = pg_query($conexion, $query);

while ($fila = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$fila['num_pokedex']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['especie']."</td>";
    echo "<td>".$fila['altura']."</td>";
    echo "<td>".$fila['peso']."</td>";
    echo "<td>".$fila['descripcion']."</td>";
    echo "</tr>";
}

pg_close($conexion);
?>
</tbody>
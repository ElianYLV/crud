<?php
function conectar() {
    $connection = pg_connect("host=dpg-d4l48uqli9vc73e32o60-a.oregon-postgres.render.com port=5432 dbname=pokedex_gq5p user=elian password=Q4Hq8pfW5VosD9MNE6LQToypcCYWTlvS sslmode=require");
    return $connection;
}

function insertar($nombre, $especie, $altura, $peso, $descripcion) {
    $connection = conectar();
    $query = "INSERT INTO pokemon (nombre, especie, altura, peso, descripcion) VALUES ($1, $2, $3, $4, $5)";
    pg_prepare($connection, "insertar", $query);
    pg_execute($connection, "insertar", [$nombre, $especie, $altura, $peso, $descripcion]);
    pg_close($connection);
}

/*

function modificar(){
    $connection = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname='Algebra relacional'");
    $query="update libros set titulo=$1, autor=$2, precio=$3, paginas=$4 where isbn=$5";
    $respuesta=pg_prepare($connection, "modificar", $query); 
    $respuesta2=pg_execute($connection, "modificar", ["título", "autor", 25.00, 190, "123456789"]);
   //var_dump($connection);
   pg_close($connection);
}
modificar();


function eliminar(){
    $connection = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname='Algebra relacional'");
    $query="delete from libros where isbn=$1";
    $respuesta=pg_prepare($connection, "eliminar", $query); 
    $respuesta2=pg_execute($connection, "eliminar", ["123456789"]);
    //var_dump($connection);
    pg_close($connection);
}
eliminar();


function seleccionar(){
    $connection = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname='Algebra relacional'");
    $query="select * from libros";
    $respuesta=pg_query($connection, $query);
    while($fila=pg_fetch_assoc($respuesta)){
        echo "Título: ".$fila['titulo']." | Autor: ".$fila['autor']." | Precio: ".$fila['precio']." | Páginas: ".$fila['paginas']." | ISBN: ".$fila['isbn']."<br>";
    }
    pg_close($connection);
}
    
seleccionar();
*/

?>
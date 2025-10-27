<?php
function conectar() {
    $connection = pg_connect("host=localhost port=5432 dbname=datosPoke user=postgres password=1234");
    return $connection;
}

?>
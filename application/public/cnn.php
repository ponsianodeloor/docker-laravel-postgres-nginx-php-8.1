<?php
$db_host = "localhost";
$db_port = "5432";
$database = "mascotas";
$db_user = "postgres";
$db_password = "postgres";

try {
    $base_de_datos = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$database", $db_user, $db_password);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
?>
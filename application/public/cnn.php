<?php
$db_host = "172.28.1.2";
$db_port = "5432";
$database = "api_roles_permissions_sercop";
$db_user = "postgres";
$db_password = "postgres";

try {
    $base_de_datos = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$database", $db_user, $db_password);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
?>
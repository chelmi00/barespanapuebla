<?php
    $host = "localhost";
    $dbname = "id16790866_carta";
    $user = "id16790866_barespanapuebla";
    $pass = "TiWx9s?6tFZ?{9bI";

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $error) {
        die("Error conexión BBDD " . $error->getMessage());
    }
?>
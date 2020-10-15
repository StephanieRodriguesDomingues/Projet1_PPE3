<?php
/* Connect to a MySQL database using driver invocation */
$dbhost = "localhost";
$dbname = "db_gestioncr";
$dbuser = "root";
$dbpass = "root";

try {
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
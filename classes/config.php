<?php
    $host = "localhost:3306";
    $user = "root";
    $password = "";
    $database = "DATABASEPHP";

    $mysqli = new mysqli($host, $user, $password, $database);

    if($mysqli->connect_errno)
        echo "Falha na conexão : (".$mysqli->connect_errno.") ".$mysqli->connect_error." ";
        
?>
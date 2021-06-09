<?php

    $username = "root";
    $password = "";
    $server ="127.0.0.1:8889";
    $database = "usn-76";

    try {
        $conn = new PDO("mysql:host=".$server.";dbname=".$database, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado";
        echo "<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
<?php
require "core/function/conn-core.php";

    /**
     * @global string $table
     * @global PDO $conn
     */

    try {
        $sql = 'select * from user';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $k=>$v) {
            echo "<pre>";
            var_dump($v);
            echo "</pre>";
         }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
$conn = null;
<?php
    require "core/function/conn-core.php";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

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
            var_dump($v);
         }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
$conn = null;
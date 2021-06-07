<?php
    require "conn-core.php";

    $LName = htmlspecialchars($_POST["fname"]);
    $Name = htmlspecialchars($_POST["lname"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $password = htmlspecialchars($_POST["password"]);

    /**
    * @global PDO $conn
    */
    try {
        $sql = 'insert into user (fname, name, email, password) values (:LName, :Name, :mail, :password)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([':LName' => $LName, ':Name' => $Name, ':mail' => $mail, 'password' => $password]);

      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
<?php
require "conn-core.php";

$mail = htmlspecialchars($_POST["mail"]);
$password = htmlspecialchars($_POST["password"]);
    /**
     * @global string $table
     * @global PDO $conn
     */

    try {
        $sql = 'select * from user where email = :mail and password = :password';
        $param = [':mail' => $mail, ':password' => hash('sha512', $password)];
        $stmt = $conn->prepare($sql);
        $stmt->execute($param);

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            $sql = 'select privileges from user where email = :mail';
            $param = [':mail' => $mail];
            $stmt = $conn->prepare($sql);
            $stmt->execute($param);
            $result = $stmt->fetch();

            if($result['privileges'] == "1"){
                session_start();
                $_SESSION['admin']="admin_session";
                define('USER', 'user');

                header('Location: https://esn76.test/app/dashboard.php');
                exit;

            } elseif($result['privileges'] == "2"){
                session_start();
                $_SESSION['user']="user_session";
                $_GLOBALS['USER'] = 'user';

                header('Location: https://esn76.test/app/dashboard.php');
                exit;
            }elseif($result['privileges'] == "3"){
                echo "cette session a été bloqué par un administrateur";
            }
        } else {
            echo "c'est pô le bon password fdp";
            var_dump($_SESSION['admin']);
        }
    }catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
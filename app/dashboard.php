<?php
require_once '../core/function/conn.php';

    session_start();
    var_dump($_SESSION[]);

    unset($_SESSION[]);
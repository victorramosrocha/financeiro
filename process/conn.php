<?php

// Conexão com o banco de dados
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "financeiro";

    $con = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!$con) {
        die("Connection failed: " . $con->errorInfo());
    }
    
    /*$conn = new mysqli($serverName, $userName, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }*/

// 
?>
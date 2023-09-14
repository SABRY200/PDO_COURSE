<?php
try {
    //Localhost
    $db_host = "mysql:host=localhost;dbname=pdo_course";
    //Root
    $db_user = "root";
    //Password
    $db_password = "";
    $connect = new PDO("$db_host", "$db_user", "$db_password");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



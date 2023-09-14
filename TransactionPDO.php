<?php
require "connect.php";

try {
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->beginTransaction();
    $connect->query("INSERT INTO posts (titlee , body) VALUES ('post seven','body post seven')");
    $connect->query("INSERT INTO posts (title , body) VALUES ('post eight','body post eight')");
    $connect->commit();
} catch (Exception $e) {
    $connect->rollBack();
    echo $e->getMessage();
}
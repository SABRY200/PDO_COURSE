<?php
require "connect.php";


$title = "post six";
$body = "body post six";
$insert = $connect->prepare("INSERT INTO posts (title , body) VALUES (:title , :body)");
$insert->execute([
    ':title' => $title,
    ':body' => $body
]);

echo ($connect->lastInsertId());//return last number of id in a tabel 

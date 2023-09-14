<?php

require "connect.php";

//Prepare->prepare("INSERT INTO posts (title , body) VALUES (:title , :body)
$title = "post four";
$body = "body post four";
$insert = $connect->prepare("INSERT INTO posts (title , body) VALUES (:title , :body)");
$insert->execute([
    ':title' => $title,
    ':body' => $body
]);

if($insert == true){
    echo "success";
}else{
    echo "failed";
}
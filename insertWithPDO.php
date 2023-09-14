<?php
require "connect.php";
//insert->query("INSERT INTO posts (title , body) VALUES ('post three','body post three')");
$insert = $connect->query("INSERT INTO posts (title , body) VALUES ('post three','body post three')");


if($insert == true){
    echo "success";
}else{
    echo "failed";
}
<?php

require "connect.php";

//UPDATE INTO DATABASE
$title = "post two two";
$body = "body post two two";
$id = 2;
$update = $connect->prepare("UPDATE posts SET title = :title, body = :body where id = :id");
$update->execute([
    ':title' => $title,
    ':body' => $body,
    ':id' => $id
]);
if($update == true){
    echo "success";
}else{
    echo "failed";
}
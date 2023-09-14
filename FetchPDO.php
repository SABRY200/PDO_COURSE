<?php
require "connect.php";

$select = $connect->query("SELECT * FROM posts");


//DATA = Array Assocative
//FETCH_ASSOC == $row['body']
        while($row = $rows->fetch(PDO::FETCH_ASSOC)){
            echo $row['body'] . "<br />";
        }
//================================================
//DATA = Fetches the next row and returns it as an object
//FETCH_OBJ == $row->body
        while($row = $rows->fetch(PDO::FETCH_OBJ)){
            echo $row->body . "<br />";
        }
<?php
require "connect.php";


$data = $connect->query("SELECT * FROM posts");

// echo $data->rowCount();
//Return Number of Row In table
if ($data->rowCount() > 0) {
        while($row_data = $data->fetch(PDO::FETCH_ASSOC)){
            echo $row_data['body'] . "<br />";
        }
}else{
    echo "No Posts Yet";
}
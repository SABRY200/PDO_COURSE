<?php
require "connect.php";

$id = 4;
$delete = $connect->prepare("DELETE FROM posts where id = :id");
$delete->execute([
    ':id' => $id
]);
if ($delete == true) {
    echo "success";
} else {
    echo "failed";
}

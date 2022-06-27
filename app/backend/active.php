<?php
include('connection.php');

$sql = "SELECT active FROM user_details WHERE id = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$active = 0;
if($row['active'] == 0) {
    $active = 1;
}

$sql = "UPDATE user_details SET active='$active' WHERE id = $_GET[id]";
$query = $conn->query($sql);
if($query) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
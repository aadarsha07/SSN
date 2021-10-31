<?php 

include('connection.php');

$sql = "DELETE FROM user_details WHERE id = $_GET[id]";
$query = $conn->query($sql);

if($query) {
    $sql = "DELETE FROM documents WHERE detail_id = $_GET[id]";
    $query = $conn->query($sql);

    if($query) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
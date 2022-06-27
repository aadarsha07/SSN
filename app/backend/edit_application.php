<?php
include('connection.php');
$sql = "SELECT * FROM user_details WHERE id=$_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sql = "SELECT * FROM documents WHERE detail_id=$_GET[id]";
$result = $conn->query($sql);
$doc = $result->fetch_assoc();
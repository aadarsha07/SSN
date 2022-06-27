<?php
include('connection.php');

$sql = "SELECT * FROM user_details WHERE active=0";
$details = $conn->query($sql);
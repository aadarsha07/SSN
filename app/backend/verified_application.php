<?php
include('connection.php');

$sql = "SELECT * FROM user_details WHERE active=1";
$details = $conn->query($sql);
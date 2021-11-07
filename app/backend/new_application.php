<?php
include('connection.php');
include('session.php');

$sql = "SELECT * FROM user_details WHERE active=0";
$details = $conn->query($sql);
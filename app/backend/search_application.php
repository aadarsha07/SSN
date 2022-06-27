<?php
include('connection.php');

$sql = "SELECT * FROM user_details WHERE user_key='$_POST[user_key]' and active=1";
$details = $conn->query($sql);
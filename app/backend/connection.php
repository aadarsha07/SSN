<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ssn";

$conn = new mysqli($host, $user, $pass, $db);
$_SESSION['ssn-data'] = null;
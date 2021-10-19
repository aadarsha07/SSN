<?php
include("connection.php");
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($result->num_rows <= 0) {
    return header("Location:../../index.php?message=No email found.");
}
if(password_verify($pass,$row['password'] )) {

    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['verified'] = $row['verified'];
    
    return $row['role']=='SA' ? header("Location:../frontend/super_admin/index.php") : header("Location:../frontend/admin/index.php");
}
else {
    return header("Location:../../index.php?message=Opps!, Password is incorrect.");
}
<?php

include("connection.php");
include("session.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

$sql = "SELECT email FROM users WHERE email=$email";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    return header("Location:../register.php?message=Email already taken.");
}

if($pass == $cpass) {
    $encPass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$encPass', 'A')";
    if($conn->query($sql) == TRUE) {
        return header("Location:apply.php");
    }
    return header("Location:../register.php?message='Opps Something is wrong !'");
}
else {
    return header("Location:../register.php?message=Password and Confirm password do not match.");  
}


function dd($data) {
    echo("<pre>");
    print_r($data);
    echo("</pre>");
}
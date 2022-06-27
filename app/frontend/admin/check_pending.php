<?php
include('../../backend/connection.php');
session_start();
$sql = "SELECT * FROM user_details WHERE user_id=$_SESSION[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows <=0){
    return header("Location:../frontend/admin/index.php");
}
if($row['active']==0){
    return header("Location:pending_view.php");
}
else{
    return header("Location:../frontend/super_admin/show_application.php?id={$row['id']}");
}
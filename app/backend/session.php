<?php

session_start();
if( !isset($_SESSION['name']) || !isset($_SESSION['id']) || !isset($_SESSION['email'])) {
    session_destroy();
    return header("Location:../../../index.php");
}
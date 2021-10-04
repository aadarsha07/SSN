<?php
include('connection.php');

// General Details
$fname = trim($_POST['fname']);
$mname = trim($_POST['mname']);
$lname = trim($_POST['lname']);
$email = trim($_POST['email']);
$gender = trim($_POST['gender']);
$dob = trim($_POST['dob']);
$contact = $_POST['contact'];
$grand_father = $_POST['grand_father'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$spouse_name = $_POST['spouse_name'];
$son = $_POST['son'];
$daughter = $_POST['daughter'];
$occupation = $_POST['occupation'];
$blood_group = $_POST['blood_group'];

// Permanent Details
$p_province_no = $_POST['p_province_no'];
$p_zone = $_POST['p_zone'];
$p_district = $_POST['p_district'];
$p_metro = $_POST['p_metro'];
$p_ward = $_POST['p_ward'];
$p_street = $_POST['p_street'];

// Temporary Details
$t_province_no = $_POST['t_province_no'];
$t_zone = $_POST['t_zone'];
$t_district = $_POST['t_district'];
$t_metro = $_POST['t_metro'];
$t_ward = $_POST['t_ward'];
$t_street = $_POST['t_street'];

// User's Documents
$citizenship_no = $_POST['citizenship_no'];
$passport_no = $_POST['passport_no'];
$license_no = $_POST['license_no'];
$pancard_no = $_POST['pancard_no'];

// Inser General Details

$sql = "INSERT INTO user_details (
    first_name,
    middle_name,
    last_name,
    gender,
    dob,
    grandfather_name,
    father_name,
    mother_name,
    spouse_name,
    son,
    daughter,
    occupation,
    blood_group,
    contact,
    email
    ) VALUES(
        '$fname',
        '$mname',
        '$lname',
        '$gender',
        '$dob',
        '$grand_father',
        '$father',
        '$mother',
        '$spouse_name',
        '$son',
        '$daughter',
        '$occupation',
        '$blood_group',
        '$contact',
        '$email'    
    )";
    
    $query = $conn->query($sql);
    if($query == True){
        echo "New record added";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
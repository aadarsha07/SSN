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

// User Id
$dob_date = new DateTime($dob);
$year_month = $dob_date->format('ym');
$user_id = $_SESSION['id'];
$user_key = $fname[0].'-'.date('y').$year_month.''.date('d');

// User Docs
$user_photo = $_FILES['user_photo'];
$citizenship = $_FILES['citizenship_card'];
$passport = $_FILES['passport'];
$license = $_FILES['license'];
$pancard = $_FILES['pancard'];

global $error;
$error = [];
unset($_SESSION['errors']);
unset($_SESSION['success-message']);

// Insert General Details
require("query/new_register_query.php");
    $query = $conn->query($sql);
    if($query){
        $last_id = $conn->insert_id;
        if($user_photo["error"]===0){
            $upload_status = uploadUserDoc($user_photo, 'photo');
            $user_photo_file_name = $upload_status;
        }
        if($citizenship["error"]===0){
            $upload_status = uploadUserDoc($citizenship, 'citizenship');
            $citizenship_file_name = $upload_status;
            if(empty($_POST['citizenship_no'])){
                array_push($error, 'Citizenship no. field is required');
            }
            $c_n = $_POST['citizenship_no'];
        }
        if($passport['error']===0){
            $upload_status = uploadUserDoc($passport, 'passport');
            $passport_file_name = $upload_status;
            if(empty($_POST['passport_no'])){
                array_push($error, 'Passport no. field is required');
            }
            $pass_n = $_POST['passport_no'];
        }
        if($license['error']===0){
            $upload_status = uploadUserDoc($license, 'license');
            $license_file_name = $upload_status;
            if(empty($_POST['license_no'])){
                array_push($error, 'License no. field is required');
            }
            $lic_n = $_POST['license_no'];
        }
        if($pancard['error']===0){
            $upload_status = uploadUserDoc($pancard, 'pancard');
            $pancard_file_name = $upload_status;
            if(empty($_POST['pancard_no'])){
                array_push($error, 'Pan Card no. field is required');
            }
            $pan_n = $_POST['pancard_no'];
        }
        if(empty($error)) {
            $sql = "INSERT INTO documents(user_id, user_key, photo, c_n, c_file, pass_n, pass_file, lic_n, lic_file, pan_n, pan_file, detail_id) VALUES('$user_id', '$user_key', '$user_photo_file_name', '$c_n', '$citizenship_file_name', '$pass_n', '$passport_file_name', '$lic_n', '$license_file_name', '$pan_n', '$pancard_file_name', '$last_id')";
            $query = $conn->query($sql);
        }
        else {
            array_push($error,'Something went worng.');
            $_SESSION['errors'] = $error;
            header("Location:../frontend/admin");
        }
        {
            if($query) {
                $_SESSION['success-message'] = "Record Added !";
                header("Location:../frontend/admin");
            }
            array_push($error, $conn->error);
        }
    }
    else{
        $_SESSION['ssn-data'] = $_POST;
        header("Location:../frontend/admin");
    }

    function uploadUserDoc($file,$dir) {
        global $error;
        $extensions = ['jpg','jpeg','png']; 
        $target_dir = "../../assets/images/$dir/";
        $target_file = $target_dir.basename($file["name"]);
        $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(!in_array($ext,$extensions)) {
            array_push($error,"Sorry your file is not a image.");
            return false;
        }
     
        if(!move_uploaded_file($file["tmp_name"], $target_file)){
            array_push($error,"Sorry something went wrong.");
            return false;
        }
        return $file['name'];
      
    }
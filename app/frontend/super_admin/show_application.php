<?php 
    include('../header.php'); 
    include('../../backend/session.php');
    include('../../backend/edit_application.php'); 
?>

<h3 class="text-center">
    Gneral Details
</h3>
<table class="view_tb">
    <tr>
        <th>User Key:</th>
        <td><?= $row['user_key']; ?></td>
    </tr>
    <tr>
        <th>Name:</th>
        <td><?= $row['first_name'] .' '. $row['middle_name'].' '.$row['last_name']; ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?= $row['email']; ?></td>
    </tr>
    <tr>
        <th>Contact:</th>
        <td><?= $row['contact']; ?></td>
    </tr>
    <tr>
        <th>Date Of Birth:</th>
        <td><?= $row['dob']; ?></td>
    </tr>
    <tr>
        <th>Gender:</th>
        <td><?= $row['gender']; ?></td>
    </tr>
    <tr>
        <th>Grand Father Name:</th>
        <td><?= $row['grandfather_name']; ?></td>
    </tr>
    <tr>
        <th>Father Name:</th>
        <td><?= $row['father_name']; ?></td>
    </tr>
    <tr>
        <th>Motgher Name:</th>
        <td><?= $row['mother_name']; ?></td>
    </tr>
    <tr>
        <th>Spouse Name:</th>
        <td><?= $row['spouse_name']; ?></td>
    </tr>
    <tr>
        <th>Son Name:</th>
        <td><?= $row['son']; ?></td>
    </tr>
    <tr>
        <th>Daughter Name:</th>
        <td><?= $row['daughter']; ?></td>
    </tr>
    <tr>
        <th>Occupation:</th>
        <td><?= $row['occupation']; ?></td>
    </tr>
    <tr>
        <th>Blod Group:</th>
        <td><?= $row['blood_group']; ?></td>
    </tr>
</table>
<br/>
<h3 class="text-center">
    Permanent Address
</h3>
<table class="view_tb">
    <tr>
        <th>Province No.:</th>
        <td><?= $row['pri_pro_no']; ?></td>
    </tr>
    <tr>
        <th>Zone:</th>
        <td><?= $row['pri_zone']; ?></td>
    </tr>
    <tr>
        <th>District:</th>
        <td><?= $row['pri_district']; ?></td>
    </tr>
    <tr>
        <th>Metro/Sub Metro/VDC:</th>
        <td><?= $row['pri_city']; ?></td>
    </tr>
    <tr>
        <th>Ward No.:</th>
        <td><?= $row['pri_ward']; ?></td>
    </tr>
    <tr>
        <th>Street/Tole:</th>
        <td><?= $row['pri_street']; ?></td>
    </tr>
</table>

<br/>
<h3 class="text-center">
    Temporary Address
</h3>
<table class="view_tb">
    <tr>
        <th>Province No.:</th>
        <td><?= $row['temp_pro_no']; ?></td>
    </tr>
    <tr>
        <th>Zone:</th>
        <td><?= $row['temp_zone']; ?></td>
    </tr>
    <tr>
        <th>District:</th>
        <td><?= $row['temp_district']; ?></td>
    </tr>
    <tr>
        <th>Metro/Sub Metro/VDC:</th>
        <td><?= $row['temp_city']; ?></td>
    </tr>
    <tr>
        <th>Ward No.:</th>
        <td><?= $row['temp_ward']; ?></td>
    </tr>
    <tr>
        <th>Street/Tole:</th>
        <td><?= $row['temp_street']; ?></td>
    </tr>
</table>

<br/>
<h3 class="text-center">
    User's Document
</h3>
<table class="view_tb">
  
    <tr>
        <th>Photo:</th>
        <td><img class="thumb_img" src="../../../assets/images/photo/<?= $doc['photo']; ?>" ></td>
    </tr>
    <tr>
        <th>Citizenship No:</th>
        <td><?= $doc['c_n']; ?></td>
    </tr>
    <tr>
        <th>Citizenship Card:</th>
        <td><img class="thumb_img" src="../../../assets/images/citizenship/<?= $doc['c_file']; ?>" ></td>
    </tr>
    <tr>
        <th>Passport No:</th>
        <td><?= $doc['pass_n']; ?></td>
    </tr>
    <tr>
        <th>Passport:</th>
        <td><img class="thumb_img" src="../../../assets/images/passport/<?= $doc['pass_file']; ?>" ></td>
    </tr>
    <tr>
        <th>License No:</th>
        <td><?= $doc['lic_n']; ?></td>
    </tr>
    <tr>
        <th>License:</th>
        <td><img class="thumb_img" src="../../../assets/images/license/<?= $doc['lic_file']; ?>" ></td>
    </tr>
    <tr>
        <th>Pan No.:</th>
        <td><?= $doc['pan_n']; ?></td>
    </tr>
    <tr>
        <th>Pan Card:</th>
        <td><img class="thumb_img" src="../../../assets/images/pancard/<?= $doc['pan_file']; ?>" ></td>
    </tr>
</table>
<?php 
    include('../header.php'); 
    include('../../backend/session.php');
    include('../../backend/new_application.php'); 
?>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>User Key</th>
    <th colspan=3 style="text-align:center;">Actions</th>
    <th>Active</th>
  </tr>
  <?php 
  foreach($details as $row){ ?>
   <tr>
    <td><?= $row['first_name'] .' '.$row['middle_name'].' '.$row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['gender'] ?></td>
    <td><?= $row['user_key'] ?></td>
    <td><a href="edit_application.php?id=<?= $row['id']; ?>">Edit</a></td>
    <td>View</td>
    <td>Delete</td>
    <td><input type="checkbox"></td>
  </tr>
 <?php } ?>
 

</table>
<?php include('../footer.php'); ?>
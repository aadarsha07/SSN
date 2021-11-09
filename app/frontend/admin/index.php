<?php include('header.php'); ?>
<?php include('../../backend/session.php'); ?>
<div id="admin">
    <?php
        if($_SESSION['verified'] == 0);
        include("new_form.php");
    ?>
</div> 
<?php include('../footer.php'); ?>

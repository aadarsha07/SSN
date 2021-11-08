<?php include('../header.php'); ?>
<?php include('../../backend/session.php'); ?>
<div id="admin">
    <?php
        if($_SESSION['verified'] == 0);
        
    ?>
    <center>
        <h1>Verification Pending ...</h1>
    </center>
</div> 
<?php include('../footer.php'); ?>

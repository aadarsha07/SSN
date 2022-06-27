<?php include('../header.php'); ?>
<?php include('../../backend/session.php'); ?>
<center>
    <form action="search_list.php" method="post" class="search_form">
    <input type="text" name="user_key" placeholder="Seach By User Key">
    <button type="submit" class="search_btn">Submit</button>
    </form>
</center>
<?php include('../footer.php'); ?>
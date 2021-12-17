<?php
include('config.php');
session_start();
include('includes/header.php');
?>

<div id="about-page">
    <h1><?php echo $headline;?></h1>
    <img src="images/users-db.png" alt="Screen shot of Veronica's User Database">
    <img src="images/homes-db.png" alt="Screen shot of Veronica's Home Database">
</div>

<?php include('includes/footer.php');?>
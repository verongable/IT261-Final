<?php //login.php page
// input fields for username and password

include('server.php');
include('includes/header.php');
// include ('includes/header-form.php'); ?>
<div id="wrapper">
<h1 class="login">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit" class="btn1" name="login_user">Login</button>

        <button type="button" class="btn2" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

        <?php include ('errors.php');?>
    </fieldset>
</form>

<section class="block">
    <h3>Not a member?</h3>
    Register <a href="register.php">here</a>
</section>
</div><!-- close wrapper -->

<?php
include('includes/footer.php');
?>
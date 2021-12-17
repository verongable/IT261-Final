<?php
// after creating this index.php, you will not be able to access it unless you login as  user or register first, then login

session_start();

include('config.php');

// if the user has not loggin in correctly, they will be directed to the login page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// Notification message
// if successful, welcome the end user

if(isset($_SESSION['success'])) :?>

<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div> <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) :?>

 <!-- end welcome logout div -->
<?php endif ; ?>
</header>

<div id="homepage-wrapper">
    <main class="homepage-main">
        <h1><?php echo $headline;?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet, nibh a cursus cursus, ipsum justo aliquam dolor, at convallis arcu dui porttitor mi. Aliquam sodales eu sem non sagittis.</p>

        <p>Quisque fringilla rhoncus velit a aliquet. Aenean sed tincidunt eros. Integer efficitur nec dolor maximus condimentum. Ut tincidunt arcu lacus, ut mattis dui fermentum vel.</p>

        <p>Nullam vehicula ipsum a arcu cursus vitae. Turpis nunc eget lorem dolor sed viverra. A cras semper auctor neque vitae tempus quam pellentesque nec. Nec ullamcorper sit amet risus nullam eget felis. Semper viverra nam libero justo. Lobortis scelerisque fermentum dui faucibus in ornare.</p>
    </main>

    <aside class="homepage-aside">
        <?php echo random_photos($image);?>
    </aside>
</div> <!-- end wrapper -->

<?php
include('includes/footer.php');
?>


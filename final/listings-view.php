<?php
include('config.php');
session_start();

// if isset $GET['today']

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: listings.php');
}

$sql = 'SELECT * FROM homes WHERE home_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// now we create a variable, $result
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)){
        // not echoing here, we are assigning our row first name to our variable $first_name
        $street_address = stripslashes($row['street_address']);
        $zipcode = stripslashes($row['zipcode']);
        $sq_ft = stripslashes($row['sq_ft']);
        $price = stripslashes($row['price']);
        $bedroom = stripslashes($row['bedroom']);
        $bath = stripslashes($row['bath']);
        $description = stripslashes($row['description']);
        $feedback = '';
    } //ends while
} else {
    $feedback = 'Something is not working';
}

include('includes/header.php');
?>

<div id="wrapper">
    <h1 class="listings-view">Welcome to <?php echo $street_address;?>'s Information Page!</h1>
    <aside class="listings-view-aside">
    <?php
    if($feedback == ''){
        echo '<img src="images/listing1'.$id.'.jpeg" alt="'.$street_address.'">';
    }
    ?>
    </aside>
    <main class="listings-view-main">
        <?php
        if($feedback == '') {
        echo '<ul>';
        echo '<li><b>Street Address: </b> '.$street_address.'</li>';
        echo '<li><b>Zipcode: </b> '.$zipcode.'</li>';
        echo '<li><b>Square Feet: </b> '.$sq_ft.'</li>';
        echo '<li><b>Bedrooms: </b> '.$bedroom.'</li>';
        echo '<li><b>Baths: </b> '.$bath.'</li>';
        echo '<li><b>Price: </b> $'.$price.'</li>';
        echo '<li><p>'.$description.'</p></li>';
        echo '</ul>';
        echo '<p>Return back to <a href="listings.php"><b>listings</b></a></p>';
        }
        ?>
    </main>
    <div class="listings-bottom">
    <?php
    if($feedback == ''){
        echo '<img src="images/listing2'.$id.'.jpeg" alt="'.$street_address.'">';
        echo '<img src="images/listing3'.$id.'.jpeg" alt="'.$street_address.'">';
        echo '<img src="images/listing4'.$id.'.jpeg" alt="'.$street_address.'">';
        echo '<img src="images/listing5'.$id.'.jpeg" alt="'.$street_address.'">';
    }
    ?>
    </div>
</div>

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');?>
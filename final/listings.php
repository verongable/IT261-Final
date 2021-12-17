<?php
include('config.php');
session_start();
include('includes/header.php');
?>

<div id="wrapper">
    <main class="listings-main">
        <h1><?php echo $headline;?></h1>

        <?php

        // we need to grab our table and assign it to a variable
        $sql = 'SELECT * FROM homes';

        // we need to connect to the database using mysqli_connect() function
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

        // now we create a variable, $result
        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // now its time for the if statement - if we have more than 0 rows...
        if(mysqli_num_rows($result) > 0) {
        echo '<table>
        <tr>
        <th></th>
        <th>Street Address</th>
        <th class="price">Price</th>
        <th></th>
        </tr>';
        // time for the while loop - and the while loop will return the array
        while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td><img src="images/home'.$row['home_id'].'.jpeg" alt="'.$street_address.'"></td>';

        echo '<td class="address"> '.$row['street_address'].'</td>';

        echo '<td class="price">$'.$row['price'].'</td>';

        echo '<td><i>To view this listing, please click <a href="listings-view.php?id='.$row['home_id'].'"><b>here</b></a></i></td>';

        echo '</tr>';
        } //ends while loop
        echo '</table>';

        } else {
        echo 'Houston, we have a problem';
        }
        mysqli_free_result($result);
        mysqli_close($iConn);
        ?>
    </main>
</div>

<?php include('includes/footer.php');?>
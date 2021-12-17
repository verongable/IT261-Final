<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// initialize/define variables
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password= '';
$success = 'You have successfully logged on!';
$errors = array();

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
}

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['agents.php'] = 'Agents';
$nav ['listings.php'] = 'Listings';
$nav ['contact.php'] = 'Contact';

// function for our naviagation, function is then called out in header.php

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'PNW Luxury Homes';
    $body = 'home';
    $headline = 'Welcome to PNW Luxury Homes';
    break;
    case 'about.php':
    $title = 'About - PNW Luxury Homes';
    $body = 'about inner';
    $headline = 'My Databases';
    break;
    case 'agents.php':
    $title = 'Agents - PNW Luxury Homes';
    $body = 'switch inner';
    $headline = 'Today\'s Featured Agent';
    break;
    case 'listings.php':
    $title = 'Listings - PNW Luxury Homes';
    $body = 'homes inner';
    $headline = 'Available Listings in Seattle, WA';
    break;
    case 'contact.php':
    $title = 'Contact - PNW Luxury Homes';
    $body = 'contact inner';
    $headline = 'Request More Information';
    break;
    default:
    $title = 'PNW Luxury Homes';
}

// For our index.php hero

$image = array(
    'home5-1',
    'home3-1',
    'squirrel',
    'babyelephant',
    'babyraccoon'
    );

function random_photos($image){

    $image[0] = 'home5-1';
    $image[1] = 'home3-1';
    $image[2] = 'home1-1';
    $image[3] = 'home2-2';
    $image[4] = 'home3-3';

    $i = rand(0,4);
    $selected_image = ''.$image[$i].'.jpeg';
    echo '<img src="images/'.$selected_image.'" alt=" '.$image[$i].' ">';
}

//For our agent.php switch page

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch
switch ($today) {
    case 'Tuesday' :
    $agent = "Julie Bennett";
    $subheader = 'Real Estate Agent';
    $pic = 'julie.png';
    $alt = 'Julie Bennett sitting outside';
    $content = '<p>Local Expertise. Global Connections.
    Julie has been involved in the Seattle real estate scene as an investor, renovator and broker since 2010. Julie is passionate about educating clients through the entire lifecycle of property ownership and offers unique perspective to everyone from first-time home buyers to seasoned investors. Drawing on her decade of experience of working in strategic sales for Boeing, Julie brings a practical and data-driven approach to her real estate practice.</p>';
    break;

    case 'Wednesday' :
    $agent = "Solomon Alabi";
    $subheader = 'Real Estate Agent';
    $pic = 'solomon.png';
    $alt = 'Solomon Alabi smiling';
    $content = '<p>When clients choose Solomon Alabi to work with, they’ve aligned themselves with a real estate broker whose leadership communication, discipline, resilience, and collaboration make them an unstoppable team ready to sell their home or make the winning offer. It just so happens that Solomon honed these skills during his professional basketball career. As a positive, purposeful listener and gentle giant, he still maintains his competitive edge when representing clients during negotiations.</p>';
    break;
    
    case 'Thursday' :
    $agent = "Dehlan Gwo";
    $subheader = 'Real Estate Agent';
    $pic = 'dehlan.jpeg';
    $alt = 'Dehlan Gwo sitting and smiling';
    $content = '<p>A trusted broker and advisor, Dehlan\'s commitment to delivering sales strategy expertise & client advocacy is the pillar of his client-centric business. He maintains high trust relationships with his clients in order to anticipate, advise and consult them through each step of the process; ensuring his clients, their homes, and their transactions are serviced to the highest standard. Dehlan is currently heading sales at SPIRE Residences in Downtown Seattle, a 41-story luxury high-rise currently under construction near the Space Needle.</p>';
    break;

    case 'Friday' :
    $agent = "George Beasley";
    $subheader = 'Real Estate Agent';
    $pic = 'george.jpeg';
    $alt = 'George Beasly smiling';
    $content = '<p>George Beasley is one of the most trusted and sought-after residential real estate brokers in the Seattle area. He brings over 15 years of expertise to the table and has created hundreds of successful outcomes for buyers and sellers within all property types and price points. George is a consistent top-producer and founder of George Beasley & Associates, a team of dedicated in-city experts. With a focus on handling every transaction to seamless results, George puts his clients at ease with his calm demeanor and positive attitude.</p>';
    break;

    case 'Saturday' :
    $agent = "Shandi Boyle";
    $subheader = 'Real Estate Agent';
    $pic = 'shandi.jpeg';
    $alt = 'Shandi Boyle smiling';
    $content = '<p>Shandi Boyle’s love of homes began from a young age, touring the residences her father built and always looking forward to the annual Street of Dreams event. Since then, Shandi has built a strong reputation within the local real estate community, helping people find their dream homes and ease into new chapters of life. Whether her clients are buying or selling, Shandi’s aim is to alleviate as much stress as possible throughout the entire transaction.</p>';
    break;

    case 'Sunday' :
    $agent = "Lino Guidero";
    $subheader = 'Real Estate Agent';
    $pic = 'lino.jpeg';
    $alt = 'Link Guidero smiling infront of a bookcase';
    $content = '<p>In over a decade of real estate work, Lino has established incomparable experience working with single homes, condominiums and investment properties. Lino offers far more residential experience than most brokers as his background has ranged from being a trusted broker directing and advising his clientele on home ownership, rental properties to investment opportunities to a co-owner position where he lead the business planning and company direction for a small real estate firm.</p>';
    break;

    case 'Monday' :
    $agent = "Melanie Beasley";
    $subheader = 'Real Estate Agent';
    $pic = 'melanie.jpeg';
    $alt = 'Melanie Beasley smiling graciously';
    $content = '<p>Melanie Beasley is a trusted residential real estate broker with George Beasley & Associates. Her dedication, exceptional service and ability to understand the wants, needs and desires of her clients, come together to foster an enjoyable buying or selling experience. Melanie understands that buying or selling a home is both an emotionally and financially significant transaction and represents one of the biggest decisions her clients may make in their lifetime.</p>';
    break;
}

//For our contact.php form
//Our variables

$full_name = '';
$email = '';
$phone = '';
$contact_time = '';
$tour = '';
$comments = '';
$privacy = '';


$full_name_err = '';
$email_err = '';
$phone_err = '';
$contact_time_err = '';
$tour_err = '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['full_name'])) {
        $full_name_err = 'Please enter your full name';
    } else {
        $full_name = $_POST['full_name'];
    }

    if(empty($_POST['email'])) {
        $email_err = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { 
        $phone_err = 'Invalid format!';
        } else {
        $phone = $_POST['phone'];
        }
        }

    if($_POST['contact_time'] == NULL) {
        $contact_time_err = 'Please select a touring time';
    } else {
        $contact_time = $_POST['contact_time'];
    }

    if(empty($_POST['tour'])) {
        $tour_err = 'Please let us know what kind of tour you are interested in!';
    } else {
        $tour = $_POST['tour'];
    }

    if(empty($_POST['comments'])) {
        $comments_err = 'Please fill out the comment section';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'You must agree';
    } else {
        $privacy = $_POST['privacy'];
    }

    function my_tour(){
        $my_return = '';
        if(!empty($_POST['tour'])){
            $my_return = implode(', ', $_POST['tour']);
        }
        return $my_return;
    }

if(isset(
    $_POST['full_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['contact_time'],
    $_POST['tour'],
    $_POST['comments'],
    $_POST['privacy']
    )) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Listing Inquiry,' .date('m/d/y');
        $body = '
        Full name: '.$full_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Type of Tour Interested In: '.my_tour().' '.PHP_EOL.'
        Availability: '.$contact_time.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }
} // end of server request

// Our listing table for listings.php
$listing['1214 Warren Ave N'] = 'warren1_<p>$8,250,000</p>';
$listing['170 Prospect St'] = 'prospe1_<p>$5,200,000</p>';
$succulent['618 W Highland Dr'] = 'highla1_<p>$7,000,000</p>';
$listing['1013 15th Ave E'] = '15thAv1_<p>$3,599,999</p>';
$listing['4750 54th Ave SW'] = '54thAv1_<p>$4,350,000</p>';


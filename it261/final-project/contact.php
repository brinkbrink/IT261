<?php 
$first_name = '';
$last_name = '';
$email = '';
$current = '';
$destinations = '';
$type = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$current_Err = '';
$destinations_Err = '';
$type_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name!';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name!';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email!';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['current'])) {
    $current_Err = 'Please choose your current location!';
} else {
    $current = $_POST['current'];
}

if(empty($_POST['destinations'])) {
    $destinations_Err = 'Please choose your destination(s)!';
} else {
    $destinations = $_POST['destinations'];
}

if(empty($_POST['type'])) {
    $type_Err = 'Please choose your preferred mode!';
} else {
    $type = $_POST['type'];
}

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST Agree.';
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_Err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    }
    }

// the logic is if post destinations is NOT empty, then, 
// we need to grab the destinations and display the, just like we did in our implode.php



function my_destinations() {
    $my_return = '';
    if(!empty($_POST['destinations'])) {
    $my_return = implode(', ', $_POST['destinations']);
    }
return $my_return;

} // closes function




if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['type'],
$_POST['current'],
$_POST['destinations'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone']
)) {
//
$to = 'szemeo@mystudentswa.com' ;
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Mode: '.$type.' '.PHP_EOL.'
Destinations: '.my_destinations().' '.PHP_EOL.'
Current: '.$current.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@ebrink.online',
    'Reply-to' => ''.$email.''

);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}



} // end of server request



session_start();

include('config.php');

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
// notification message

?>
</header>

    <div id="wrapper">
    <main>
    <?php echo $headline; ?>

    <h2>Please fill out our transit request form!</h2>

    <?php
    include('includes/form.php');
    ?>
    </main>
    <aside>
    <img alt="Simpsons characters boarding the school bus" src="images/boarding.gif">
    <!-- <p>This form will send a request for a transit route accommodating your current location, desired destination and preferred mode of transportation.</p> -->
    </aside>

<?php
include('includes/footer.php');?>
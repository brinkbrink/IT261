<?php 
$first_name = '';
$last_name = '';
$email = '';
$level = '';
$features = '';
$area = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$level_Err = '';
$features_Err = '';
$area_Err = '';
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

if(empty($_POST['level'])) {
    $level_Err = 'Please check your Level!';
} else {
    $level = $_POST['level'];
}

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email!';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['features'])) {
    $features_Err = 'Please choose your Feature(s)!';
} else {
    $features = $_POST['features'];
}

if(empty($_POST['area'])) {
    $area_Err = 'Please select your Area!';
} else {
    $area = $_POST['area'];
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

// the logic is if post features is NOT empty, then, 
// we need to grab the features and display the, just like we did in our implode.php



function my_features() {
    $my_return = '';
    if(!empty($_POST['features'])) {
    $my_return = implode(', ', $_POST['features']);
    }
return $my_return;

} // closes function




if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['level'],
$_POST['features'],
$_POST['area'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone']
)) {

$to = 'szemeo@mystudentswa.com' ;
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Difficulty Level: '.$level.' '.PHP_EOL.'
Features: '.my_features().' '.PHP_EOL.'
Region: '.$area.' '.PHP_EOL.'
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


include('config.php');
include('includes/header.php');?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>This form will send a request for a hike accommodating difficulty level, features, and area chosen.</p>
    <h2>Please fill out our hike request form!</h2>
    <?php
    include('includes/form.php');
    ?>
    </main>
    <aside>
    <img alt="Mount Tahoma" src="images/tahoma.png">
    </aside>

<?php
include('includes/footer.php');?>
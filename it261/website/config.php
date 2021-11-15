<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create a function for our nav so the function is called out on header.php page

function my_nav($nav) {
    $my_return ='';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
        } // end else

    } // end for each
    return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of our IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to the Home page of our IT 261 Website';
    break;

    case 'about.php':
    $title = 'About page of our IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to the About page of our IT 261 Website';
    break;

    case 'daily.php':
    $title = 'Daily page of our IT 261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to the Daily page where my Homework 3 Switch will display';
    break;

    case 'project.php':
    $title = 'Project page of our IT 261 Website';
    $body = 'project inner';
    $headline = 'Welcome to the Project page of our IT 261 Website';
    break;

    case 'contact.php':
    $title = 'Contact page of our IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to the Contact page of our IT 261 Website';
    break;

    case 'gallery.php':
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to the Gallery page of our IT 261 Website';
    break;
}

// beginning of switch for hw 3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

// emailable form

// random images

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
echo '<br>';

// $i = rand(0, 4);
// $selected_image = ''.$photos[$i].'.jpg';

function rand_pic($photos) {
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.png';
    return '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

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
    $first_name_Err = 'Please fill out your First Name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['level'])) {
    $level_Err = 'Please check your level';
} else {
    $level = $_POST['level'];
}

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['features'])) {
    $features_Err = 'Please choose your Feature(s)';
} else {
    $features = $_POST['features'];
}

if(empty($_POST['area'])) {
    $area_Err = 'Please select your Area';
} else {
    $area = $_POST['area'];
}

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST Agree';
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

$to = 'brinkbrink@gmail.com' ;
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

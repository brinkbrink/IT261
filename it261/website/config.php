<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');




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

    case 'thx.php':
        $title = 'Thank you for your request!';
        $body = 'thx inner';
        $headline = 'Thank you for your request!';
        break;

    default: 
        $title = 'Project page of our IT 261 Website';
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

// $i = rand(0, 4);
// $selected_image = ''.$photos[$i].'.jpg';

function rand_pic($photos) {
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.png';
    return '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

// gallery exercise -- week 7
$womxn['Ada_Lovelace'] = 'adalo_First computer programmer.';
$womxn['Grace_Hopper'] = 'grace_Invented the compiler.';
$womxn['Katherine_Johnson'] = 'kathe_Executed critical space calculations.';
$womxn['Margaret_Hamilton'] = 'marga_Coined the term "software engineering."';
$womxn['Adele_Goldberg'] = 'adele_Developed blueprint for Graphical User Interfaces (GUI).';
$womxn['Safiya_Noble'] = 'safiy_Author of "Algorithms of Oppression."';
$womxn['danah_boyd'] = 'danah_Founder and president of Data & Society.';
$womxn['Meredith_Broussard'] = 'mered_Author of "Artificial Unintelligence: How Computers Misunderstand the World."';

// $name                       $image
// $key                        $value

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
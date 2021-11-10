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


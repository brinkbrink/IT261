<?php 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['list.php'] = 'Database';
$nav['contact.php'] = 'Contact';

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>
<body class="
<?php echo $body ;?>">
    <header>
        <div class="header-inner">
        <a href="index.php">
            <img id="logo" src="images/logo-small.png" alt="logo">
        </a>
        <nav>
           <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">Project</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
            </ul>-->

            <ul>
            <?php
            foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '
                <li><a class="current" href="'.$key.'">'.$value.'</a></li>';
            } else {
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
            }
        }
            ?>
            </ul>
        </nav>
    </div> <!--end header inner-->

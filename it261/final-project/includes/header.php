<?php 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Home: Brink's IT 261 Final";
        $headline = "<h1>Welcome to the Home Page!</h1>";
    break;

    case 'about.php':
        $title = "About: Brink's IT 261 Final";
        $headline = "<h1>Welcome to the About Page!</h1>";
    break;

    case 'switch.php':
        $title = "Switch: Brink's IT 261 Final";
        $headline = "<h1>Every day is a good day to celebrate a link light rail station!</h1>";
        break;
    
    case 'list.php':
        $title = "Database: Brink's IT 261 Final";
        $headline = "<h1>Popular Routes in the Seattle Area</h1>";
        break;

    case 'list-view.php':
        $title = "Database: Brink's IT 261 Final";

        break;

    case 'contact.php':
        $title = "Contact: Brink's IT 261 Final";
        $headline = "<h1>Welcome to the Contact Page!</h1>";
        break;

    case 'thx.php':
        $title = "Thanks! : Brink's IT 261 Final";
        $headline = "<h1>Thank you!</h1>";
        break;

    case 'login.php':
        $title = "Login: Brink's IT 261 Final";

        break;

    case 'register.php':
        $title = "Register: Brink's IT 261 Final";

        break;

    default:
        $title = THIS_PAGE;
        $logo = '';
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['list.php'] = 'Database';
$nav['contact.php'] = 'Contact';
$nav["index.php?logout='1"] = 'Logout';
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>
<body class="
<?php echo $body ;?>">
    <header>
        <div class="header-inner">
        <a href="index.php">
            <img id="logo" src="images/logo.jpg" alt="logo">
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
            <li><div class="welcome-logout">
 Hi 
    <?php echo $_SESSION['username']; ?>!</div>
</li>
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
<!--notification message you copied into header is below-->

<?php
if(isset($_SESSION['success'])) :?>

<div class="success">
<h3> 
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>  <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) :?>

<?php endif ; ?>
</header>
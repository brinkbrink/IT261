<?php 
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'login.php':
        $title = "Login: Brink's IT 261 Final";

        break;

    case 'register.php':
        $title = "Register: Brink's IT 261 Final";

        break;

    default:
        $title = THIS_PAGE;
        $logo = '';
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link href="css/login-styles.css" type="text/css" rel="stylesheet">
</head>

<body>

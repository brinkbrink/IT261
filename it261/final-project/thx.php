<?php

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

?>
</header>
    <div id="wrapper">
    <div id="thx">

<h1><?php echo $headline; ?></h1>
<h3>Thank you for your request!</h3>


    </div> <!--end thx-->


<?php
include('includes/footer.php');?>
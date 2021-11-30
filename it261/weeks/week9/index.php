<?php

session_start();

include('config.php');

if(isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

// include('includes/header.php');
// notification message

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
<div class="welcome-logout">
<h3> Hello 
    <?php echo $_SESSION['username']; ?>
</h3>
<p><a href="index.php?logout='1'">Log out</a></p>
</div> <!-- end welcome-logout div -->
<?php endif ; ?>

<h1>Welcome to the home page!</h1>

<!-- your footer include will be placed at the bottom of the page -->
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
    <div id="wrapper">
    <div id="hero">

    </div> <!--end hero-->
    <main>
    <?php echo $headline; ?>
    <p>Please explore this website to learn more about Seattle's public transportation system. While flawed, our city's system still has much to be celebrated! In the <a href="switch.php">Switch</a> page you'll find a new link light rail station to celebrate each day of the week. Clicking <a href="list.php">Database</a> will take you to a list of some of Seattle's most popular routes along with details about each of them. If you navigate to the <a href="contact.php">Contact</a> page you can fill out a form to request a route to match your given paremeters of current location, desired destination, and preferred mode of transportation. Finally, if you click <a href="index.php?logout='1">Logout</a>, you will be taken back to the login page. I hope you enjoy my ode to something that makes my life better and continues to improve with the support of Seattle citizens. I also hope you're a Simpsons fan, or can at least tolerate Bart's hijinks, as you'll find gifs featuring the famous Springfield Elementary bus littered about the pages. </p>
    </main>
    <aside>
    <h2>An example of Bart's hijinks:</h2><br>
    <img alt="bart simpson dancing on a bus" src="images/bartman-dance.gif">
    
    </aside>

<?php
include('includes/footer.php');?>
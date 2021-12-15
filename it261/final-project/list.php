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
</header>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <h2>Popular Public Transportation Routes in Seattle Area</h2>
    <?php
$sql = 'SELECT * FROM seatransit';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement -- if we have more than 0 rows, good

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
echo '<h3>For more information about '.$row['name'].', please click <a href="list-view.php?id='.$row['route_id'].' ">here!</a></h3>';
echo '<ul>';
echo '<li> Route Name: '.$row['name'].'</li>';
echo '<li> Transit Type: '.$row['type'].'</li>';
echo '<li> Areas Serviced: '.$row['areas'].'</li>';
echo '</ul>';
echo '<hr>';
    } // closing while
} // closing if
else {
    echo 'Houston, we have a problem!';
} // closing else

mysqli_free_result($result);
mysqli_close($iConn);

?>
    </main>
    <aside>
    <img src="images/map.jpeg" alt="transit map of Seattle">
    </aside>

<?php
include('includes/footer.php');?>
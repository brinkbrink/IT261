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
    <div id="list-main">
    <?php echo $headline; ?>
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
echo '<h4>For more information about '.$row['name'].', click <a href="list-view.php?id='.$row['route_id'].' ">here!</a></h4>';
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
    </div>
    <aside>
    <img src="images/map.jpeg" alt="transit map of Seattle">
    </aside>

<?php
include('includes/footer.php');?>
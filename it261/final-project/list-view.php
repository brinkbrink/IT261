<?php 
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: seatransit.php');
}

$sql = 'SELECT * FROM seatransit WHERE route_id = '.$id.'';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
        // no echo, assigning row first name to variable first name
        $name = stripslashes($row['name']);
        $type = stripslashes($row['type']);
        $areas = stripslashes($row['areas']);
        $stops = stripslashes($row['stops']);
        $feedback = '';
    } // ending while
} // ending if
else {
    $feedback = 'Something is not working!';
}

// for the big assignment, you will now call out your header include

include('includes/header.php');

?></header>
<div id="wrapper">
<main>
<h2>Welcome to <?php echo $name;?>'s page!</h2>

<?php
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>Route Name:</b> '.$name.'</li>';
    echo '<li><b>Transit Type:</b> '.$type.'</li>';
    echo '<li><b>Season:</b> '.$areas.'</li>';
    echo '</ul>';
    echo '<p>Notable stops: '.$stops.'</p>';
    echo '<p>Return back to the <a href="list.php">project page!</a></p>';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>

</main>
<aside>
<?php
if($feedback == ''){
    echo '<img class="center" src="images/map-'.$id.'.jpeg" alt="'.$name.'">';
}
?>
</aside>
</div> <!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
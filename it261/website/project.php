<?php
include('config.php');
include('includes/header.php');?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <h2>Forageable Foods of the Pacific Northwest</h2>
    <?php
$sql = 'SELECT * FROM forage';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement -- if we have more than 0 rows, good

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
echo '<h3>For more information about '.$row['common'].', please click <a href="forage-view.php?id='.$row['forage_id'].' ">here!</a></h3>';
echo '<ul>';
echo '<li> Common name: '.$row['common'].'</li>';
echo '<li> Scientific name: '.$row['scientific'].'</li>';
echo '<li> Season: '.$row['season'].'</li>';
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
    <img src="images/pnw.jpg" alt="map of pnw">
    </aside>

<?php
include('includes/footer.php');?>
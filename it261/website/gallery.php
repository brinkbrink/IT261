<?php
// people.php
// people-view.php
// config.php
// credentials.php
// won't work on localhost

include('config.php');
include('includes/header.php');

// for your big database assignment, your header include would go here

// we need to grab our table and assign it to a variable

$sql = 'SELECT * FROM people';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement -- if we have more than 0 rows, good

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
echo '<p>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].' ">here!</a></p>';
echo '<ul>';
echo '<li>'.$row['first_name'].'</li>';
echo '<li>'.$row['last_name'].'</li>';
echo '<li>'.$row['email'].'</li>';
echo '</ul>';
    } // closing while
} // closing if
else {
    echo 'Houston, we have a problem!';
} // closing else

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
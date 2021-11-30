<?php 
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: forage.php');
}

$sql = 'SELECT * FROM forage WHERE forage_id = '.$id.'';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
        // no echo, assigning row first name to variable first name
        $common = stripslashes($row['common']);
        $scientific = stripslashes($row['scientific']);
        $season = stripslashes($row['season']);
        $description = stripslashes($row['description']);
        $feedback = '';
    } // ending while
} // ending if
else {
    $feedback = 'Something is not working!';
}

// for the big assignment, you will now call out your header include

include('includes/header.php');

?>
<main>
<h2>Welcome to <?php echo $common;?>'s page!</h2>

<?php
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>Common Name:</b> '.$common.'</li>';
    echo '<li><b>Scientific Name:</b> '.$scientific.'</li>';
    echo '<li><b>Season:</b> '.$season.'</li>';
    echo '</ul>';
    echo '<p>'.$description.'</p>';
    echo '<p>Return back to the <a href="project.php">project page!</a></p>';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>

</main>
<aside>
<?php
if($feedback == ''){
    echo '<img class="center" src="images/'.$id.'.jpg" alt="'.$common.'">';
}
?>
</aside>
</div> <!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
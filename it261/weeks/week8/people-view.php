<?php 
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop -- the while loop will return the array 
    while($row = mysqli_fetch_assoc($result)) {
        // no echo, assigning row first name to variable first name
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $description = stripslashes($row['description']);
        $blurb = stripslashes($row['blurb']);
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
<h2>Welcome to <?php echo $first_name;?>'s page!</h2>

<?php
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>First Name:</b> '.$first_name.'</li>';
    echo '<li><b>Last Name:</b> '.$last_name.'</li>';
    echo '<li><b>Email:</b> '.$email.'</li>';
    echo '<li><b>Birthdate:</b> '.$birthdate.'</li>';
    echo '<li><b>Occupation:</b> '.$occupation.'</li>';
    echo '</ul>';
    echo '<p>'.$description.'</p>';
    echo '<p>Return back to the <a href="people.php">people page!</a></p>';
}

mysqli_free_result($result);
mysqli_close($iConn);
?>

</main>
<aside>
<?php
if($feedback == ''){
    echo '<img class="center" src="images/people'.$id.'.jpg" alt="'.$first_name.'">';
    echo '<p class="blurb">'.$blurb.'</p>';
}
?>
</aside>
</div> <!--end wrapper-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
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
<?php
// class coffee exercise
// if today is Thursday it's a pumpkin latte day
// we will start with the isset() function
// then we will intro our first global variable
// our switch

// $variable = 'Life is good!';
// if(isset($variable)) {
//     echo 'Yippy-skippy!';
// } else {
//     echo 'Not';
// }

// starting the switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOABL VARIABLES are capitalized and start with $_GET

if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}
date_default_timezone_set('America/Los_Angeles');
// switch 

switch($today) {
case 'Monday':
    $station = 'Tukwila International Blvd Station';
    $pic = 'tukwila.jpeg';
    $alt = 'tukwila station';
    $content = 'The <b>Tukwila International Blvd Station</b> is helpful for daily commuters and flying fiends alike!';
    break;

case 'Tuesday':
    $station = 'Columbia City Station';
    $pic = 'columbia.jpeg';
    $alt = 'columbia city station';
    $content = 'The <b>Columbia City Station</b> is the station I see the most!';
    break;

case 'Wednesday':
    $station = 'SoDo Station';
    $pic = 'sodo.jpeg';
    $alt = 'sodo station';
    $content = 'The <b>SoDo</b> station is the one to take if you want to catch the Mariners!';
    break;

case 'Thursday':
    $station = 'International District Station';
    $pic = 'id.jpeg';
    $alt = 'international district station';
    $content = 'The <b>International District Station</b> is where to stop if you want the best noodles.';
    break;

case 'Friday':
    $station = 'Pioneer Square Station';
    $pic = 'pioneer.jpeg';
    $alt = 'pioneer square station';
    $content = 'The <b>Pioneer Square Station</b> is especially helpful on First Thursdays if you like to look at art!';
    break;

case 'Saturday':
    $station = 'Capitol Hill Station';
    $pic = 'capitol.jpeg';
    $alt = 'capitol hill station';
    $content = 'The <b>Capitol Hill Station</b> connects people to Cal Anderson Park, Kaiser Permanente campus, and some of the best bars in town!';
    break;

case 'Sunday':
    $station = 'University of Washington Station';
    $pic = 'uw.jpeg';
    $alt = 'university of washington station';
    $content = 'The <b>University of Washington Station</b> is great for UW students, professors, and Huskies fans.';
    break;
}    
?>
    <div id="wrapper">

    <main>
    <h1>Every day is a good day to celebrate a link light rail station!</h1><br>
    <h2>Today we celebrate the <?php
echo $station;
?>!</h2>  

<br>
<img alt="Simpsons gif of kids singing hail to the bus driver to Otto" src="images/hail.gif">
<br>
<p><?php echo $content;?></p>
<br>

<h2>Check out the Daily Stations:</h2>
<ul>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
</ul>

</main>
    <aside>
<h2>The <?php
echo $station;
?> looks like this:</h2><br>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    </aside>

<?php
include('includes/footer.php');?>
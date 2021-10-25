<?php



echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("h:i");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
// why didi I change the time from a 12 hour clock to a 24?
// I will use an if/elseif statement, resulting in a different message based on the time of day
// if the time is less than 11, morning
// if the time is less than 16, afternoon
// else it's evening

$time = date("H:i");
if($time <= 11) {
echo '<h2 style ="color:yellow;">Good morning, Brink!</h2>';
} elseif($time <= 16) {
    echo '<h2 style ="color:green;">Good afternoon, Brink!</h2>';   
} else {
    echo '<h2 style ="color:blue;">Good evening, Brink!</h2>';
}
// we can place html elements inside of our echo
?>

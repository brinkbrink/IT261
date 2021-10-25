<?php
// for loops
// tricky!

for ($x = 0; $x <=21; $x+= 3) {
    echo "The number is: $x <br>";
}

// is a for loop for our famous celcius - far converter

// do not clal out the cel variable outside of the loop!

for ($celcius = 0; $celcius <= 100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b> Farenheit: </b>' . $friendly_far .' <b> Celcius: </b> <span style="color:red;">' .$celcius.' </span><hr> ';

}

// kilometers and we have miles

for ($mile = 0; $mile <= 100; $mile++) {
    $kilometer = ($mile * 1.609344);
    $friendly_km = floor($kilometer);
    echo '<b> Miles: </b>' . $mile .' <b> Kilometers: </b> <span style="color:blue;">' . $friendly_km .' </span><hr> ';
}

?>
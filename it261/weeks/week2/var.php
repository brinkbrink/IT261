<?php

//intro to variables
//var.php
//var is a container for info
$name = 'Brink';
$weather = 'Today is a partly cloudy day';
$body_temp = 98.6;

echo $name;
echo 'My name is $name';
//single quotes around a variable the value will not display
echo '<br>';
echo "My name is $name";
//double quotes allow you to call actual variable
echo '<br>';


echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temeprature is '.$body_temp.' and all is well!';
echo '<br>';
$name = 'Tigre';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';

$first_name = 'E.';
$last_name = 'Brink';

echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
echo '<br>';
echo "Here are the names with a double's quote! $first_name$last_name";
//punctuation challenges - inside single quotes you must nest the variable withi the following: '.$variable.' ...when you have an apostrophe you must use escape before apostrophe \'
echo '<br>';
echo $name = 'E.';
echo $name .= ' Brink';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;

echo '<br>';
$x = 120;
$x *= .09;

// our first function - number_format()

echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';

//our second function - date
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

// arrays
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo $fruit;
echo '<br>';
echo $fruit[3]; // you can echo an index array
echo '<br>';
$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];
// CAN NOT echo an array
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<br>';
$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';
//index is the key of the array, home is value (key value relationship)
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';
echo '<br>';

$show = 'I May Destroy You';
$show_actor = 'Michaela Coel';
$show_genre = 'Drama';
echo 'My favorite series during 2020 was "'.$show.'" starring '.$show_actor.', and it is a '.$show_genre.' ';

echo '<br>';

?>
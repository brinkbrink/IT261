<?php
// More on variables, arithmetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a + $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

// two new functions--round down and up
$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';
$friendly_money = floor($money);
echo '<br>';
$friendly_money = ceiling($money);
echo '<br>';

// logic and calculations
// circumference of a circle  c = 2*pi*r
$radius = '10';
$pi = 3.14;
$circumference = (2*$pi)*$radius;
echo $circumference;

// always think logic first
// 22 degrees cel = what in far?
// far = (_c * 9/5)+32
$celcius = 22;
$farenheit = ($celcius * (9/5))+32;
$friendly_far = floor($farenheit);
echo '<br>';
echo ''.$friendly_far.' degrees';
echo '<br>';

// logic and the exchange rate
// 1 canadian dollars = .79 u.s. dollars
$canada = 1443;
$canada *= .79;
echo $canada;
echo '<br>';
echo '<p>I have <b>'.$canada.'</b> American dollars!</p>';

$canada = 1443;
$canada *= .79;
$friendly_can = floor($canada);
echo '<br>';
echo '<p>I have <b>'.$friendly_can.'</b> American dollars!</p>';

?>
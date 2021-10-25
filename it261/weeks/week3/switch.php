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
    $mushroom = '<h2>Today is our Cantharellus day!</h2>';
    $pic = 'cantharellus.jpg';
    $alt = 'cantharellus';
    $content = '<b>Cantharellus</b> is a genus of popular edible mushrooms, commonly known as chanterelles, a name which can also refer to the type species, Cantharellus cibarius. They are mycorrhizal fungi, meaning they form symbiotic associations with plants, making them very difficult to cultivate.';
    break;

case 'Tuesday':
    $mushroom = '<h2>Today is our Boletus day!</h2>';
    $pic = 'boletus.png';
    $alt = 'boletus';
    $content = '<b>Boletus</b> is a genus of mushroom-producing fungi, comprising over 100 species. The genus Boletus was originally broadly defined and described by Carl Linnaeus in 1753, essentially containing all fungi with hymenial pores instead of gills.';
    break;

case 'Wednesday':
    $mushroom = '<h2>Today is our Cortinarius day!</h2>';
    $pic = 'cortinarius.jpg';
    $alt = 'cortinarius';
    $content = '<b>Cortinarius</b> is a globally distributed genus of mushrooms in the family Cortinariaceae. It is suspected to be the largest genus of agarics, containing over 2,000 widespread species.';
    break;

case 'Thursday':
    $mushroom = '<h2>Today is our Agaricus day!</h2>';
    $pic = 'agaricus.jpg';
    $alt = 'agaricus';
    $content = '<b>Agaricus</b> is a genus of mushrooms containing both edible and poisonous species, with possibly over 300 members worldwide. The genus includes the common mushroom and the field mushroom, the dominant cultivated mushrooms of the West.';
    break;

case 'Friday':
    $mushroom = '<h2>Today is our Tricholoma day!</h2>';
    $pic = 'tricholoma.jpg';
    $alt = 'tricholoma';
    $content = '<b>Tricholoma</b> is a genus of fungus that contains many fairly fleshy white-spored gilled mushrooms which are found worldwide generally growing in woodlands. These are ectomycorrhizal fungi, existing in a symbiotic relationship with various species of coniferous or broad-leaved trees.';
    break;

case 'Saturday':
    $mushroom = '<h2>Today is our Trametes day!</h2>';
    $pic = 'trametes.jpg';
    $alt = 'trametes';
    $content = '<b>Trametes</b> is a genus of fungi that is distinguished by a pileate basidiocarp, di- to trimitic hyphal systems, smooth non-dextrinoid spores, and a hymenium usually without true hymenial cystidia. The genus has a widespread distribution and contains about fifty species.';
    break;

case 'Sunday':
    $mushroom = '<h2>Today is our Amanita day!</h2>';
    $pic = 'amanita.jpg';
    $alt = 'amanita';
    $content = 'The genus <b>Amanita</b> contains about 600 species of agarics, including some of the most toxic known mushrooms found worldwide, as well as some well-regarded edible species.';
    break;
}    
?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Switch Classwork Exercise</title>
<style>
#wrapper {
    width: 940px;
    margin: 20px auto;
}
</style>
</head>
<body>
<div id="wrapper">
<h1>My Excellent Switch Classwork Exercise!</h1>
<?php
echo $mushroom;
?>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content;?></p>
<h2>Check out our Daily Genus</h2>
<ul>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
</ul>
</div> <!-- end wrapper -->
</body>
</html>



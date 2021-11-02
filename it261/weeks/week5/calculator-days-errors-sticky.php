<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculating Form - HW5</title>
<link href="css/calculator.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1>Our Trip Calculator</h1>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  
;?>"
method="post">

<fieldset>
<label for="name">Your Name</label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ;?>
">

<label for="miles">How many miles will you be driving?</label>
<input type="text" name="miles" value="
<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ;?>
">

<label for="hours">How many hours per day would you like to be driving?</label>
<input type="text" name="hours" value="
<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ;?>
">

<label for="price">Price per gallon</label>
<ul>
<li><input type="radio" name="price" value="3.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"'
;?>>3.00</li>
<li><input type="radio" name="price" value="3.50"<?php if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"'
;?>>3.50</li>
<li><input type="radio" name="price" value="4.00"<?php if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"'
;?>>4.00</li>
</ul>

<label for="fuel">Fuel efficiency</label>

<select name="fuel">
<option value="" NULL
<?php if(isset($_POST['blank']) && $_POST['fuel'] == NULL) echo 'selected= "unselected" '
;?>
>Select Fuel Efficiency</option>

<option value="20"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected= "selected" '
;?>>Terrible</option>

<option value="30"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected= "selected" '
;?>>Getting Better</option>

<option value="40"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected= "selected" '
;?>>Good</option>

<option value="50"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '50') echo 'selected= "selected" '
;?>>Great</option>
</select>

<input type="submit" value="Calculate">
<input type="reset" value="Reset">
</fieldset>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

// if our posts name, email, currency or amount is empty, then we will call out specific echo

    if(empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name</span>';
    }
    if(empty($_POST['miles'])) {
        echo '<span class="error">Please fill out miles</span>';
    }
    if(empty($_POST['hours'])) {
        echo '<span class="error">Please fill out hours</span>';
    }
    if(empty($_POST['price'])) {
        echo '<span class="error">Please choose your price</span>';
    }

// if post bank is NULL, please select your bank!

if($_POST['fuel'] == NULL) {
    echo '<span class="error">Please choose your fuel efficiency!</span>';
}

if(isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['fuel']
)) {
    $name = $_POST['name'];
    $miles = $_POST['miles'];
    $hours = $_POST['hours'];
    $price = $_POST['price'];
    $fuel = $_POST['fuel'];
    $gastotal = ($miles / $fuel) * $price;
    $friendly_gastotal = number_format($gastotal,2);
    $hourtotal = $miles / 60;
    $friendly_hourtotal = floor($hourtotal);
    $daytotal = $hourtotal / $hours;
    $friendly_daytotal = floor($daytotal);

    echo '
        <div class="box">
        <h2>Calculator Results</h2>
        <p>'.$name.', you will be driving <b>'.$miles.' miles</b></p>
        <p>Your vehicle has an efficiency rating of <b>'.$fuel.' miles per gallon.</b></p>
        <p>Your total cost for gas will be <b>$'.$friendly_gastotal.' dollars</b></p>
        <p>You will be driving a total of <b>'.$friendly_hourtotal.' hours equating to '.$friendly_daytotal.' days.</b></p>
        </div>
    ';
} // close isset
    
} // server request



?>
</body>

</html>
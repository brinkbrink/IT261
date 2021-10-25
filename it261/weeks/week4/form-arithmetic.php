<doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Arithmetic Form</title>

<style>
form {
    width: 400px;
    margin: 0 auto;
}

fieldset {
    border: 1px solid red;
    padding: 10px;
}

label, textarea {
    display: block;
    margin-bottom: 5px;
}

input, textarea {
    margin-bottom: 10px;
}

input [type=text], 
input [type=email], 
textarea {
    width: 90%;
}

h3 {
    color: red;
    text-align: center;
}

.box { 
    width: 400px;
    margin: 20px auto;
    padding: 15px;
    background: grey; 
}

</style>
</head>

<body>
<form action="" method="post">
    <fieldset>
        <label for="fname">First Name</label>
        <input type="text" name="fname">
        <label for="brushes">How many paint brushes?</label>
        <input type="number" name="textbooks">
        <label for="quills">How many quills?</label>
        <input type="number" name="quills">
        <label for="pencils">How many pencils?</label>
        <input type="number" name="pencils">
        <input type="submit" value="Send it!">
    </fieldset>
</form>

<?php
// form 3 - adding the HTML and CSS!
if(isset($_POST['fname'],
        $_POST['brushes'],
        $_POST['quills'],
        $_POST['pencils'])) {

$fname = $_POST['fname'];
$brushes = $_POST['brushes'];
$int_brushes = intval($brushes);
$quills = $_POST['quills'];
$int_quills = intval($quills);
$pencils = $_POST['pencils'];
$int_pencils = intval($pencils);

$total = $int_brushes + $int_quills + $int_pencils;


// we are going to nest an if/else statement

if(empty($fname && $int_brushes && $int_quills && $int_pencils)) {
    echo '<h3>Please fill out all inputs</h3>';
} else {
    // echo $fname;
    // echo $lname;
    // echo $email;
    // echo $comments;

    echo '
    <div class="box">
    <h2>Hello '.$fname.'</h2>
    <p>You have collected the following:</p>
    <ul>
    <li>'.$int_brushes.' Brushes</li>
    <li>'.$int_quills.' Quills</li>
    <li>'.$int_pencils.' Pencils</li>
    </ul>
    <p>Totalling '.$total.' beverages</p>
    </div>
    ';

} // end else

} // end isset




?>
</body>
</html>
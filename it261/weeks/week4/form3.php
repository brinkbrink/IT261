<?php
// form 3 - adding the HTML and CSS!
if(isset($_POST['fname'],
        $_POST['lname'],
        $_POST['email'],
        $_POST['comments'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// we are going to nest an if/else statement

if(empty($fname && $lname && $email && $comments)) {
    $error = 'Please fill out the forms';
} else {
    $no_error = 'All is well';
}

} // end isset




?>

<doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form No. 3, featuring HTML and CSS</title>

</head>
<body>
<form action="" method="post">
    <fieldset>
        <label for="fname">First Name</label>
        <input type="text" name="fname">
        <label for="lname">Last Name</label>
        <input type="text" name="lname">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="comments">Comments</label>
        <textarea name="comments"></textarea>
        <input type="submit" value="Send it!">
    </fieldset>
</body>
</html>
<doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form No. 3, featuring HTML and CSS</title>
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
        <label for="lname">Last Name</label>
        <input type="text" name="lname">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="comments">Comments</label>
        <textarea name="comments"></textarea>
        <input type="submit" value="Send it!">
    </fieldset>
</form>
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
    echo '<h3>Please fill out all inputs</h3>';
} else {
    // echo $fname;
    // echo $lname;
    // echo $email;
    // echo $comments;

    echo '
    <div class="box">
    <ul>
    <li><b>First Name:</b> '.$fname.'</li>
    <li><b>Last Name:</b> '.$lname.'</li>
    <li><b>Email:</b> '.$email.'</li>
    <li><b>Comments:</b> '.$comments.'</li>
    </ul>
    </div>
    ';

} // end else

} // end isset




?>
</body>
</html>
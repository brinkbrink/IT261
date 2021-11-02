<?php
// our first form
// no worries re: html
// form elements are important
// form attributes and values are important
// use the global variable of $_POST
// the two items - the two input fields will be name and email

if(isset($_POST['name'],
        $_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
if(empty($_POST['name'] && 
        $_POST['email'])) {
            echo 'Please fill out the fields!';
        } else {
            echo $name;
            echo '<br>';
            echo $email;
        }
        } else {
            echo '
            <form action="" method="post">
            <label>NAME</label>
            <input type="text" name="name">

            <label>EMAIL</label>
            <input type="email" name="email">

            <input type="submit" value="Send it!">

            </form>';
        }
?>
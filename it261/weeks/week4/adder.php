<!doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

h1 {
    color: green;
    text-align: center;
}

form {
    width: 400px;
    margin: 30px auto;
    border: 1px solid red;
    padding: 10px;
}


label {
    color: #777;
    margin-bottom: 8px;
    display: block;
}

input {
    display: block;
    margin-bottom: 8px;
    
}

h2 {
    text-align: center;
    color: red;
    font-style: italic;
}

p {
    text-align: center;
}

</style>
</head>
<body>


<h1>Adder.php</h1> 

<?php //adder-wrong.php

if(isset($_POST['num1'],
        $_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

    if($num1 == NULL) {
        echo '<h2>Please fill out the num1 Value</h2>';
    } elseif($num2 == NULL) {
        echo '<h2>Please fill out the num2 Value</h2>';
    } else {
    echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
    echo ' <p> and the answer is <br>
    <style="color:red;">'.$myTotal.'!"</p>';
    echo '<p><a href="">Reset page</a>';
    } 
} else {
        echo ' <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="number" name="num1">

        <label>Enter the second number:</label>
        <input type="number" name="num2">

        <input type="submit" value="Add Em!!"> 
        
        </form>';
    }
    


// <!--incorrect closing php tag line 32--> 
// <!--unnecessary dash on line 6-->
// <!--backslash before form on line 20-->
// <!--no method on form tag on line 20-->
// <!--no opening label tag on line 21-->
// <!--num1 was incorrectly capitalized on line 21-->
// <!--closing label tag instead of opening on line 22-->
// <!--no closing label tag on line 22-->
// <!--moved if statement down to bottom of page-->
// <!--doctype not declared on line 4-->
// <!--no html lang tag-->
// closing php tag after body and html closing tags
// double quotes around php variables line 24
// spaces between periods and variable num1 line 24
// no closing h2 tag on line 24
//  no ending single quote for echo on line 27
// empty style tag on line 5
// no if statement for if values aren't entered
// semi colon inside single quotes instead of outside line 67
// no semi colon at end of echo statement line 67
// extra closing bracket on line 75
// missing closing double quote on line 77
// no need for br tags on line 72 and 75
// input type should be numbers, not text on line 72 and 75
// myTotal value with double instead of single quotes and too much space between periods on line 67
// num2 variable incorrectly capitalized on line 52

;?> 
</body>
</html>


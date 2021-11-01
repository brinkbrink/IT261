<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  
;?>"
method="post">

<fieldset>
<label for="name">NAME</label>
<input type="text" name="name">
<label for="email">EMAIL</label>
<input type="email" name="email">
<label for="amount">How much money do you have?</label>
<input type="number" name="amount">
<label for="currency">Choose your currency</label>
<input type="radio" name="currency" value="">

</fieldset>

</form>

<?php



?>
</body>

</html>
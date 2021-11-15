<?php
// cannot echo above the doctype!!!

$first_name = '';
$last_name = '';
$email = '';
$level = '';
$features = '';
$area = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$level_Err = '';
$features_Err = '';
$area_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your Last Name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['level'])) {
    $level_Err = 'Please check your level';
} else {
    $level = $_POST['level'];
}

if(empty($_POST['email'])) {
    $email_Err = 'Please fill out your Email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['features'])) {
    $features_Err = 'Please choose your Feature(s)';
} else {
    $features = $_POST['features'];
}

if(empty($_POST['area'])) {
    $area_Err = 'Please select your Area';
} else {
    $area = $_POST['area'];
}

if(empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST Agree';
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_Err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    }
    }

// the logic is if post features is NOT empty, then, 
// we need to grab the features and display the, just like we did in our implode.php



function my_features() {
    $my_return = '';
    if(!empty($_POST['features'])) {
    $my_return = implode(', ', $_POST['features']);
    }
return $my_return;

} // closes function




if(isset(
$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['level'],
$_POST['features'],
$_POST['area'],
$_POST['comments'],
$_POST['privacy'],
$_POST['phone']
)) {

$to = 'brinkbrink@gmail.com' ;
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
The first name is: '.$first_name.' '.PHP_EOL.'
The last name is: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Difficulty Level: '.$level.' '.PHP_EOL.'
Features: '.my_features().' '.PHP_EOL.'
Region: '.$area.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@ebrink.online',
    'Reply-to' => ''.$email.''

);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}



} // end of server request

;?>

<?php
include('config.php');
include('includes/header.php');?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec ipsum ut augue varius ornare tempor et leo.</p>
    <h2>Please fill out our form!</h2>
    <form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo $_POST ['first_name']
;?>
">
<span class="error">
<?php echo $first_name_Err; ?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo $_POST ['last_name']
;?>
">
<span class="error">
<?php echo $last_name_Err; ?>
</span>

<label for="email">Email</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo $_POST ['email']
;?>
">
<span class="error">
<?php echo $email_Err; ?>
</span>

<label for="phone">Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo $_POST ['phone']
;?>
">
<span class="error">
<?php echo $phone_Err; ?>
</span>

<label for="level">Difficulty Level</label>
<ul>
    <li>
    <input type="radio" name="level" value="easy" 
    <?php if(isset($_POST['level']) && $_POST['level'] == 'easy') echo 'checked="checked" ' ;?>
    > Easy
    </li>
    <li>
    <input type="radio" name="level" value="moderate"
    <?php if(isset($_POST['level']) && $_POST['level'] == 'moderate') echo 'checked="checked" ' ;?>
    > Moderate
    </li>
    <li>
    <input type="radio" name="level" value="hard"
    <?php if(isset($_POST['level']) && $_POST['level'] == 'hard') echo 'checked="checked" ' ;?>
    > Hard
    </li>
</ul>
<span class="error">
<?php echo $level_Err; ?>
</span>

<label for="features">Hike Features</label>
<ul>
    <li>
    <input type="checkbox" name="features[]" value="views"
    <?php if(isset($_POST['features']) && in_array('views', $features )) echo 'checked ="checked" ' 
    ;?>
    > Mountain Views
    </li>
    <li>
    <input type="checkbox" name="features[]" value="falls"
    <?php if(isset($_POST['features']) && in_array('falls', $features )) echo 'checked ="checked" ' 
    ;?>
    > Waterfalls
    </li>
    <li>
    <input type="checkbox" name="features[]" value="summits"
    <?php if(isset($_POST['features']) && in_array('summits', $features )) echo 'checked ="checked" ' 
    ;?>
    > Summits
    </li>
    <li>
    <input type="checkbox" name="features[]" value="flowers"
    <?php if(isset($_POST['features']) && in_array('flowers', $features )) echo 'checked ="checked" ' 
    ;?>
    > Wildflowers
    </li>
    <li>
    <input type="checkbox" name="features[]" value="fall"
    <?php if(isset($_POST['features']) && in_array('fall', $features )) echo 'checked ="checked" ' 
    ;?>
    > Fall Foilage
    </li>
    <input type="checkbox" name="features[]" value="sites"
    <?php if(isset($_POST['features']) && in_array('sites', $features )) echo 'checked ="checked" ' 
    ;?>
    > Campsites
    </li>
</ul>
<span class="error">
<?php echo $features_Err; ?>
</span>

<label for="area">Area</label>
<select name="area">
<option value="" NULL
<?php if(isset($_POST['area']) && $_POST['area'] == NULL) echo 'selected = "unselected" '
;?>
>Select One</option>
<option value="cc" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'cc') echo 'selected = "selected" '
;?>
>Central Cascades</option>
<option value="cw" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'cw') echo 'selected = "selected" '
;?>
>Central Washington</option>
<option value="ew" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'ew') echo 'selected = "selected" '
;?>
>Eastern Washington</option>
<option value="ia" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'ia') echo 'selected = "selected" '
;?>
>Issaquah Alps</option>
<option value="mt" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'mt') echo 'selected = "selected" '
;?>
>Mount Tahoma Area</option>
<option value="nc" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'nc') echo 'selected = "selected" '
;?>
>North Cascades</option>
<option value="op" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'op') echo 'selected = "selected" '
;?>
>Olympic Peninsula</option>
<option value="ps" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'ps') echo 'selected = "selected" '
;?>
>Puget Sound & Islands</option>
<option value="sn" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'sn') echo 'selected = "selected" '
;?>
>Snoqualmie</option>
<option value="sc" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'sc') echo 'selected = "selected" '
;?>
>South Cascades</option>
</select>
<option value="sw" 
<?php if(isset($_POST['area']) && $_POST['area'] == 'sw') echo 'selected = "selected" '
;?>
>Southwest Wasghington</option>
<span class="error">
<?php echo $area_Err; ?>
</span>

<label for="comments">Comments</label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])
;?>
</textarea>
<span class="error">
<?php echo $comments_Err; ?>
</span>

<label for="privacy">Privacy</label>
<ul>
    <li><input type="radio" name="privacy" value="agree"
    <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" ' ;?>
    > I agree!</li>
</ul>
<span class="error">
<?php echo $privacy_Err; ?>
</span>
<input type="submit" value="Send it">
<input type="reset" value="Reset">

</fieldset>
</form>
    </main>
    <aside>
    <h3>Here is my aside for our form</h3>
    </aside>

<?php
include('includes/footer.php');?>
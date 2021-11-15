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
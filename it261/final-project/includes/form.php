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

<label for="type">Preferred Mode of Transit</label>
<ul>
    <li>
    <input type="radio" name="type" value="bus" 
    <?php if(isset($_POST['type']) && $_POST['type'] == 'easy') echo 'checked="checked" ' ;?>
    > Bus
    </li>
    <li>
    <input type="radio" name="type" value="streetcar"
    <?php if(isset($_POST['type']) && $_POST['type'] == 'moderate') echo 'checked="checked" ' ;?>
    > Streetcar
    </li>
    <li>
    <input type="radio" name="type" value="link light rail"
    <?php if(isset($_POST['type']) && $_POST['type'] == 'hard') echo 'checked="checked" ' ;?>
    > Link Light Rail
    </li>
</ul>
<span class="error">
<?php echo $type_Err; ?>
</span>

<label for="destinations">Destination(s)</label>
<ul>
    <li>
    <input type="checkbox" name="destinations[]" value="mom"
    <?php if(isset($_POST['destinations']) && in_array('mom', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Museum of Museums (MoM)
    </li>
    <li>
    <input type="checkbox" name="destinations[]" value="spl"
    <?php if(isset($_POST['destinations']) && in_array('spl', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Seattle Public Library - Central Branch
    </li>
    <li>
    <input type="checkbox" name="destinations[]" value="seward"
    <?php if(isset($_POST['destinations']) && in_array('seward', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Seward Park
    </li>
    <li>
    <input type="checkbox" name="destinations[]" value="cal"
    <?php if(isset($_POST['destinations']) && in_array('cal', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Cal Anderson Park
    </li>
    <li>
    <input type="checkbox" name="destinations[]" value="judkins"
    <?php if(isset($_POST['destinations']) && in_array('judkins', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Judkins Park
    </li>
    <input type="checkbox" name="destinations[]" value="stadium"
    <?php if(isset($_POST['destinations']) && in_array('stadium', $destinations )) echo 'checked ="checked" ' 
    ;?>
    > Lumen Field / T-Mobile Stadium
    </li>
</ul>
<span class="error">
<?php echo $destinations_Err; ?>
</span>

<label for="current">Current Location</label>
<select name="current">
<option value="" NULL
<?php if(isset($_POST['current']) && $_POST['current'] == NULL) echo 'selected = "unselected" '
;?>
>Select One</option>
<option value="uni" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'uni') echo 'selected = "selected" '
;?>
>University District</option>
<option value="ch" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'ch') echo 'selected = "selected" '
;?>
>Capitol Hill</option>
<option value="cd" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'cd') echo 'selected = "selected" '
;?>
>Central District</option>
<option value="fh" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'fh') echo 'selected = "selected" '
;?>
>First Hill</option>
<option value="dt" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'dt') echo 'selected = "selected" '
;?>
>Downtown</option>
<option value="id" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'id') echo 'selected = "selected" '
;?>
>International District</option>
<option value="bh" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'bh') echo 'selected = "selected" '
;?>
>Beacon Hill</option>
<option value="cc" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'cc') echo 'selected = "selected" '
;?>
>Columbia City</option>
<option value="rv" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'rv') echo 'selected = "selected" '
;?>
>Rainier Valley</option>
<option value="st" 
<?php if(isset($_POST['current']) && $_POST['current'] == 'st') echo 'selected = "selected" '
;?>
>Sea-Tac</option>
</select>

<span class="error">
<?php echo $current_Err; ?>
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
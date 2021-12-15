<?php

session_start();

include('config.php');

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');
// notification message

if(isset($_SESSION['success'])) :?>

<div class="success">
<h3> 
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>  <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h3> Hello 
    <?php echo $_SESSION['username']; ?>
</h3>
<p><a href="index.php?logout='1'">Log out</a></p>
</div> <!-- end welcome-logout div -->
<?php endif ; ?>
</header>
    <div id="wrapper">
    <div id="hero">
<?php
echo rand_pic($photos);
?>
<h2>
    <pre>
    <br>
    function rand_pic($photos) {
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    return '< img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}
    </pre>
</h2>
    </div> <!--end hero-->
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec ipsum ut augue varius ornare tempor et leo. Integer rhoncus condimentum mi, in porta urna sollicitudin eu. In lectus purus, gravida id tortor eget, iaculis aliquam enim. Maecenas sagittis dapibus metus, non blandit lectus. Vestibulum vel ipsum molestie, elementum nibh a, pellentesque tellus. Aenean venenatis ultrices ligula vitae blandit. Morbi rhoncus bibendum euismod. Vivamus congue mauris nisi, at cursus velit euismod a. Mauris id lectus sagittis, imperdiet nisl non, gravida diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc aliquet orci vel lacus mollis faucibus.</p>
    </main>
    <aside>
    <h3>Here is my aside</h3>
    </aside>

<?php
include('includes/footer.php');?>
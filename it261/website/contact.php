<?php
include('config.php');
include('includes/header.php');?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>This form will send a request for a hike accommodating difficulty level, features, and area chosen.</p>
    <h2>Please fill out our hike request form!</h2>
    <?php
    include('includes/form.php');
    ?>
    </main>
    <aside>
    <img alt="Mount Tahoma" src="images/tahoma.png">
    </aside>

<?php
include('includes/footer.php');?>
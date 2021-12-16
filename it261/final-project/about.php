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

?>
</header>
    <div id="wrapper">
    <div id="hero">

    </div> <!--end hero-->
    <main>
    <?php echo $headline; ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec ipsum ut augue varius ornare tempor et leo. Integer rhoncus condimentum mi, in porta urna sollicitudin eu. In lectus purus, gravida id tortor eget, iaculis aliquam enim. Maecenas sagittis dapibus metus, non blandit lectus. Vestibulum vel ipsum molestie, elementum nibh a, pellentesque tellus. Aenean venenatis ultrices ligula vitae blandit. Morbi rhoncus bibendum euismod. Vivamus congue mauris nisi, at cursus velit euismod a. Mauris id lectus sagittis, imperdiet nisl non, gravida diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc aliquet orci vel lacus mollis faucibus.</p>
    </main>
    <aside>
    <h3>Here is my aside</h3>
    </aside>

<?php
include('includes/footer.php');?>
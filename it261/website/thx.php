<?php
include('config.php');
include('includes/header.php');?>

    <div id="wrapper">
    <div id="hero">
<?php
echo rand_pic($photos);
?>
<h2>
</h2>
    </div> <!--end hero-->
    <main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec ipsum ut augue varius ornare tempor et leo. Integer rhoncus condimentum mi, in porta urna sollicitudin eu. In lectus purus, gravida id tortor eget, iaculis aliquam enim. Maecenas sagittis dapibus metus, non blandit lectus. Vestibulum vel ipsum molestie, elementum nibh a, pellentesque tellus. Aenean venenatis ultrices ligula vitae blandit. Morbi rhoncus bibendum euismod. Vivamus congue mauris nisi, at cursus velit euismod a. Mauris id lectus sagittis, imperdiet nisl non, gravida diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc aliquet orci vel lacus mollis faucibus.</p>
    </main>
    <aside>
        <img alt="dancing kermit gif" src="https://media.giphy.com/media/8m4R4pvViWtRzbloJ1/giphy.gif">
</aside>
<?php
include('includes/footer.php');?>
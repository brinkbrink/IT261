<?php
include('config.php');
include('includes/header.php');?>

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
    return '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
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
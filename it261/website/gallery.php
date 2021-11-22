<?php

include('config.php');
include('includes/header.php');
?>
<div id="wrapper">
<h1>Womxn in Computer Science History</h1>
    <table>
    <?php foreach($womxn as $name => $image) : ?>
        <tr>
            <td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
            <td><?php echo str_replace('_', ' ', $name) ;?></td>
            <td><?php echo substr($image, 6);?> </td>
            <td><img src="images/<?php echo substr($image, 0, 3);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
        </tr>
    <?php endforeach; ?>
    </table>

 <?php   
include('includes/footer.php');
?>
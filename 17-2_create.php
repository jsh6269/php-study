<?php 
    require_once("lib/print.php");
    require("view/top.php");
?>
    <a href="17-2_create.php">create</a>
    <form action="17-3_createProcess.php" method="post">
        <p><input type="text" name="title" placeholder="Title" /></p>
        <p><textarea name="content"></textarea></p>
        <p><input type="submit" /></p>
    </form>
<?php require('view/bottom.php'); ?>

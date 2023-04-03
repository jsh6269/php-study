<?php 
    require_once("lib/print.php");
    require("view/top.php");
?>
    <style>
        textarea {
            width: 600px;
            height: 200px;
        }
    </style>

    <a href="17-2_create.php">create</a>
    <?php 
        if(isset($_GET['id'])){ ?>
            <a href="17-4_update.php?id=<?php echo $_GET['id']; ?>">update</a>
        <?php } 
    ?>
    <form action="17-5_updateProcess.php" method="post">
        <input type="hidden" name="oldTitle" value="<?php printTitle(); ?>" />
        <p><input type="text" name="title" placeholder="Title" value="<?php printTitle(); ?>" /></p>
        <p><textarea name="content"><?php printContent(); ?></textarea></p>
        <p><input type="submit" /></p>
    </form>
    
<?php require('view/bottom.php'); ?>
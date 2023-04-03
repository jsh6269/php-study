<?php 
    require_once("lib/print.php");
    require("view/top.php");
?>
    <h2>
        <?php printTitle(); ?>
    </h2>
    <?php printContent(); ?><br><br>
    <a href="17-2_create.php">create</a>
    <?php 
        if(isset($_GET['id'])){ ?>
            <a href="17-4_update.php?id=<?php echo $_GET['id']; ?>">update</a>
            <form action="17-6_deleteProcess.php" method="post">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" /><br>
                <input type="submit" value="delete" />
            </form>
        <?php } 
    ?>
<?php require('view/bottom.php'); ?>
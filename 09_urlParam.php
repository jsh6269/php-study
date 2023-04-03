<?php 
    function printList(){
        $list = scandir("./URL_data");
        foreach($list as $var){
            if($var != "." && $var != "..")
                echo "<li><a href='09_urlParam.php?id=$var'>$var</a></li>\n";
        }
    }

    function printTitle(){
        if(!isset($_GET['id'])){
            echo "Welcome";
        }
        else{
            echo $_GET['id'];
        }
    }

    function printContent(){
        if(!isset($_GET['id'])){
            echo "Hello, PHP";
        }
        else{
            echo file_get_contents("URL_data/".$_GET['id']);
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
    <h1>9_WEB</h1>
    <ol>
        <?php printList(); ?>
    </ol>
    <h2>
        <?php printTitle(); ?>
    </h2>
    <?php printContent(); ?>
</body>
</html>
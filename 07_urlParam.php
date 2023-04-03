<!DOCTYPE html>
<html>
<body>
    <h1>7_WEB</h1>
    <ol>
        <?php 
            $list = scandir("./URL_data");
            foreach($list as $var){
                if($var != "." && $var != "..")
                    echo "<li><a href='07_urlParam.php?id=$var'>$var</a></li>";
            }
        ?>
    </ol>
    <h2>
        <?php 
            if(!isset($_GET['id'])){
                echo "Welcome";
            }
            else{
                echo $_GET['id'];
            }
        ?>
    </h2>
    <?php 
        if(!isset($_GET['id'])){
            echo "Hello, PHP";
        }
        else{
            echo file_get_contents("URL_data/".$_GET['id']);
        }
    ?>
</body>
</html>
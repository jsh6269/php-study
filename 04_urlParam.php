<!DOCTYPE html>
<html>
<body>
    <h1>4_WEB</h1>
    <ol>
        <li><a href="04_urlParam.php?id=HTML">HTML</a></li>
        <li><a href="04_urlParam.php?id=CSS">CSS</a></li>
        <li><a href="04_urlParam.php?id=JavaScript">JavaScript</a></li>
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